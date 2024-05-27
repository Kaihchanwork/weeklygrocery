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

// Display the admin page
function recipe_importer_page() {
    ?>
    <div class="wrap">
        <h1>Recipe Importer</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="recipe_json" accept=".json">
            <input type="submit" name="submit" value="Upload JSON" class="button button-primary">
        </form>
    </div>
    <?php

    // Handle form submission
    if (isset($_POST['submit']) && !empty($_FILES['recipe_json']['tmp_name'])) {
        $file = $_FILES['recipe_json']['tmp_name'];
        $json_data = file_get_contents($file);
        $recipes = json_decode($json_data, true);
        process_recipes($recipes);
    }
}

// Process the recipes
function process_recipes($recipes) {
    // Ensure the main "Recipes" category exists
    $recipes_category_id = get_term_by('name', 'Recipes', 'category');
    if (!$recipes_category_id) {
        $recipes_category_id = wp_create_category('Recipes');
    } else {
        $recipes_category_id = $recipes_category_id->term_id;
    }

    foreach ($recipes as $recipe) {
        // Create subcategory for the recipe tag
        $tag_category = get_term_by('name', $recipe['tag'], 'category');
        if (!$tag_category) {
            $tag_category_id = wp_create_category($recipe['tag'], $recipes_category_id);
        } else {
            $tag_category_id = $tag_category->term_id;
        }

        // Create the recipe post
        $recipe_post = array(
            'post_title'    => wp_strip_all_tags($recipe['title']),
            'post_content'  => '', // Leaving content empty
            'post_status'   => 'publish',
            'post_category' => array($recipes_category_id, $tag_category_id)
        );
        $recipe_post_id = wp_insert_post($recipe_post);

        // Set the featured image
        $image_id = upload_image_from_url($recipe['hero_image_url']);
        if ($image_id) {
            set_post_thumbnail($recipe_post_id, $image_id);
        }

        // Add custom fields for ingredients
        foreach ($recipe['ingredients'] as $i => $ingredient) {
            // Assuming unit and quantity are in the same field separated by a space
            list($quantity, $unit) = explode(' ', $ingredient['unit'], 2);
            $quantity = floatval($quantity) / 2; // Adjust the quantity for 1 person
            add_post_meta($recipe_post_id, "ingredient_{$i}_name", $ingredient['name']);
            add_post_meta($recipe_post_id, "ingredient_{$i}_quantity", $quantity);
            add_post_meta($recipe_post_id, "ingredient_{$i}_unit", $unit);
        }

        // Add custom fields for each instruction step
        foreach ($recipe['instructions'] as $i => $instruction) {
            add_post_meta($recipe_post_id, "instruction_{$i}_text", $instruction['text']);
            add_post_meta($recipe_post_id, "instruction_{$i}_image", $instruction['image_url']);
        }
    }

    echo '<div class="updated"><p>Recipes imported successfully.</p></div>';
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
