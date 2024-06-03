<?php
/*
Plugin Name: Recipe Importer
Description: A plugin to import recipes from a JSON file.
Version: 1.4
Author: Your Name
*/

// Hook for adding admin menus
add_action('admin_menu', 'recipe_importer_menu');

// Action function for the above hook
function recipe_importer_menu() {
    add_menu_page('Recipe Importer', 'Recipe Importer', 'manage_options', 'recipe-importer', 'recipe_importer_page');
}

// Enqueue scripts
add_action('admin_enqueue_scripts', 'recipe_importer_scripts');
function recipe_importer_scripts($hook) {
    if ($hook != 'toplevel_page_recipe-importer') {
        return;
    }
    wp_enqueue_script('recipe-importer-ajax', plugin_dir_url(__FILE__) . 'recipe-importer.js', array('jquery'), null, true);
    wp_localize_script('recipe-importer-ajax', 'RecipeImporterAjax', array('ajax_url' => admin_url('admin-ajax.php')));
}

// Display the admin page
function recipe_importer_page() {
    ?>
    <div class="wrap">
        <h1>Recipe Importer</h1>
        <form id="recipe-importer-form" method="post" enctype="multipart/form-data">
            <?php wp_nonce_field('recipe_importer_nonce_action', 'recipe_importer_nonce'); ?>
            <input type="file" name="recipe_json" accept=".json" required>
            <input type="submit" name="submit" value="Upload JSON" class="button button-primary">
        </form>
        <div id="recipe-importer-message"></div>
    </div>
    <?php
}

// Handle the AJAX request
add_action('wp_ajax_process_recipes', 'recipe_importer_ajax_handler');
function recipe_importer_ajax_handler() {
    check_ajax_referer('recipe_importer_nonce_action', 'recipe_importer_nonce');

    if (isset($_FILES['recipe_json']['tmp_name'])) {
        $file = $_FILES['recipe_json']['tmp_name'];
        $json_data = file_get_contents($file);

        if ($json_data === false) {
            wp_send_json_error('Failed to read the file.');
        }

        $recipes = json_decode($json_data, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            wp_send_json_error('Invalid JSON file.');
        }

        process_recipes($recipes);
        wp_send_json_success('Recipes imported successfully.');
    } else {
        wp_send_json_error('Please upload a JSON file.');
    }
}

function process_recipes($recipes) {
    // Ensure the main "Recipes" category exists
    $recipes_category = get_term_by('name', 'Recipes', 'category');
    if (!$recipes_category) {
        $recipes_category_id = wp_create_category('Recipes');
    } else {
        $recipes_category_id = $recipes_category->term_id;
    }

    foreach ($recipes as $recipe) {
        // Create subcategory for the recipe tag
        $tag_category = get_term_by('name', sanitize_text_field($recipe['tag']), 'category');
        if (!$tag_category) {
            $tag_category_id = wp_create_category(sanitize_text_field($recipe['tag']), $recipes_category_id);
        } else {
            $tag_category_id = $tag_category->term_id;
        }

        // Check if a post with the same title exists using WP_Query
        $query_args = array(
            'title' => wp_strip_all_tags($recipe['title']),
            'post_type' => 'post',
            'post_status' => 'any',
            'posts_per_page' => 1
        );
        $query = new WP_Query($query_args);

        if ($query->have_posts()) {
            $query->the_post();
            $recipe_post_id = get_the_ID();
            // Update the existing post
            $recipe_post = array(
                'ID'            => $recipe_post_id,
                'post_title'    => wp_strip_all_tags($recipe['title']),
                'post_category' => array($recipes_category_id, $tag_category_id)
            );
            wp_update_post($recipe_post);
        } else {
            // Create a new post
            $recipe_post = array(
                'post_title'    => wp_strip_all_tags($recipe['title']),
                'post_content'  => '', // Leaving content empty
                'post_status'   => 'publish',
                'post_category' => array($recipes_category_id, $tag_category_id)
            );
            $recipe_post_id = wp_insert_post($recipe_post);
        }

        wp_reset_postdata();

        if (is_wp_error($recipe_post_id)) {
            continue;
        }

        // Set the featured image
        $image_id = upload_image_from_url($recipe['hero_image_url']);
        if ($image_id) {
            set_post_thumbnail($recipe_post_id, $image_id);
        }

        // Add or update custom fields for ingredients
        foreach ($recipe['ingredients'] as $i => $ingredient) {
            // Assuming unit and quantity are in the same field separated by a space
            list($quantity, $unit) = explode(' ', sanitize_text_field($ingredient['unit']), 2);
            $quantity = floatval($quantity) / 2; // Adjust the quantity for 1 person
            update_post_meta($recipe_post_id, "ingredient_{$i}_name", sanitize_text_field($ingredient['name']));
            update_post_meta($recipe_post_id, "ingredient_{$i}_quantity", $quantity);
            update_post_meta($recipe_post_id, "ingredient_{$i}_unit", sanitize_text_field($unit));
        }

        // Add or update custom fields for each instruction step
        foreach ($recipe['instructions'] as $i => $instruction) {
            $instruction_image_id = upload_image_from_url($instruction['image_url']);
            if ($instruction_image_id) {
                $instruction_image_url = wp_get_attachment_url($instruction_image_id);
                update_post_meta($recipe_post_id, "instruction_{$i}_image", $instruction_image_url);
            } else {
                update_post_meta($recipe_post_id, "instruction_{$i}_image", esc_url_raw($instruction['image_url']));
            }
            update_post_meta($recipe_post_id, "instruction_{$i}_text", sanitize_text_field($instruction['text']));
        }
    }
}

// Function to upload an image from a URL and return the attachment ID
function upload_image_from_url($image_url) {
    if (empty($image_url)) {
        return false;
    }

    $image_data = file_get_contents($image_url);
    if ($image_data === false) {
        return false;
    }

    $filename = basename($image_url);
    $upload_file = wp_upload_bits($filename, null, $image_data);

    if ($upload_file['error']) {
        return false;
    }

    $wp_filetype = wp_check_filetype($filename, null);
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title'     => sanitize_file_name($filename),
        'post_content'   => '',
        'post_status'    => 'inherit'
    );

    $attachment_id = wp_insert_attachment($attachment, $upload_file['file']);
    require_once(ABSPATH . 'wp-admin/includes/image.php');

    $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);
    wp_update_attachment_metadata($attachment_id, $attachment_data);

    return $attachment_id;
}

// Ensure custom fields are displayed in the post edit screen
add_action('admin_init', 'ensure_custom_fields_displayed');

function ensure_custom_fields_displayed() {
    add_post_type_support('post', 'custom-fields');
}
?>
