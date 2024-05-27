<?php
/*
Plugin Name: Weekly Recipe Planner
Description: A plugin to plan weekly recipes and summarize ingredients.
Version: 1.7
Author: Your Name
*/

// Enqueue necessary scripts and styles
function wrp_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('wrp-script', plugins_url('/assets/wrp-script.js', __FILE__), array('jquery'), '1.0', true);
    wp_localize_script('wrp-script', 'wrp_ajax', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'wrp_enqueue_scripts');

function wrp_enqueue_styles() {
    wp_enqueue_style('wrp-style', plugins_url('/assets/wrp-style.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'wrp_enqueue_styles');

// Register shortcodes
add_shortcode('wrp_recipe_selection_page', 'wrp_recipe_selection_page');
add_shortcode('wrp_recipe_summary_page', 'wrp_recipe_summary_page');

// Display all recipes with selection options
function wrp_recipe_selection_page() {
    wrp_enqueue_styles(); // Enqueue styles for this page

    // Get all recipe tags (sub-categories)
    $tags = get_terms(array(
        'taxonomy' => 'category',
        'hide_empty' => true,
        'child_of' => get_term_by('slug', 'recipes', 'category')->term_id,
    ));

    $recipes = get_posts(array('post_type' => 'post', 'category_name' => 'recipes', 'numberposts' => -1));
    ob_start();
    ?>
    <div class="recipe-selection-page">
        <h2>Select Recipes for the Week</h2>
        <div id="recipe-filter">
            <input type="text" id="recipe-search" placeholder="Search recipes...">
        </div>
        <div class="filter-buttons-container">
            <div class="filter-buttons">
                <button class="filter-button" data-category="all">All</button>
                <?php foreach ($tags as $tag) : ?>
                    <button class="filter-button" data-category="<?php echo $tag->term_id; ?>"><?php echo $tag->name; ?></button>
                <?php endforeach; ?>
            </div>
        </div>
        <form id="recipe-selection-form">
            <?php foreach ($recipes as $recipe) : ?>
                <div class="recipe-item" data-category="<?php echo implode(' ', wp_get_post_categories($recipe->ID, array('fields' => 'ids'))); ?>" data-title="<?php echo strtolower(get_the_title($recipe)); ?>">
                    <?php $featured_image = get_the_post_thumbnail_url($recipe->ID, 'medium'); ?>
                    <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr(get_the_title($recipe)); ?>" class="recipe-image" data-recipe-id="<?php echo $recipe->ID; ?>">
                    <h3 class="recipe-title" data-recipe-id="<?php echo $recipe->ID; ?>"><?php echo get_the_title($recipe); ?></h3>
                    <button type="button" class="add-recipe-button" data-recipe-id="<?php echo $recipe->ID; ?>">+</button>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
    <div class="next-button-container">
        <button type="button" id="next-step" class="next-button">Next</button>
    </div>
    <div id="recipe-popup" style="display: none;">
        <div id="recipe-popup-content">
            <span id="recipe-popup-close">&times;</span>
            <div id="recipe-popup-body"></div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// Display the selected recipes and ingredients summary
function wrp_recipe_summary_page() {
    ob_start();
    ?>
    <div id="recipe-summary">
        <div id="selected-recipes">
            <h2>Your Weekly Recipes</h2>
            <div id="recipes-content"></div>
        </div>
        <div id="ingredients-summary">
            <h2>Ingredients Summary</h2>
            <div id="ingredients-content"></div>
        </div>
    </div>
    <div class="people-selection">
        <label for="people-number-summary" class="people-number-label">Number of People:</label>
        <div class="number-input">
            <button class="decrement" id="decrease">-</button>
            <input type="number" id="people-number-summary" name="people-number-summary" value="1" min="1" max="6">
            <button class="increment" id="increase">+</button>
        </div>
    </div>
    <div id="recipe-popup" style="display: none;">
        <div id="recipe-popup-content">
            <span id="recipe-popup-close">&times;</span>
            <div id="recipe-popup-body"></div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// AJAX handler to get selected recipes and summarize ingredients
add_action('wp_ajax_wrp_get_summary', 'wrp_get_summary');
add_action('wp_ajax_nopriv_wrp_get_summary', 'wrp_get_summary');

function wrp_get_summary() {
    if (isset($_POST['recipe_ids']) && !empty($_POST['recipe_ids'])) {
        $recipe_ids = $_POST['recipe_ids'];
        $people = isset($_POST['people']) ? intval($_POST['people']) : 1; // Default to 1 person if not specified
        $recipes = get_posts(array('post__in' => $recipe_ids, 'post_type' => 'post', 'numberposts' => -1));
        $ingredients = array();

        $recipes_content = array();
        foreach ($recipes as $recipe) {
            $recipes_content[] = array(
                'ID' => $recipe->ID, // Include recipe ID
                'title' => get_the_title($recipe),
                'content' => apply_filters('the_content', $recipe->post_content),
                'thumbnail' => get_the_post_thumbnail_url($recipe->ID, 'thumbnail') // Fetch the thumbnail URL
            );

            // Get ingredients
            $i = 0;
            while (true) {
                $ingredient_name = get_post_meta($recipe->ID, "ingredient_{$i}_name", true);
                $ingredient_quantity = get_post_meta($recipe->ID, "ingredient_{$i}_quantity", true);
                $ingredient_unit = get_post_meta($recipe->ID, "ingredient_{$i}_unit", true);
                if (!$ingredient_name) break;

                $key = $ingredient_name;
                if (!isset($ingredients[$key])) {
                    $ingredients[$key] = array('quantity' => 0, 'unit' => $ingredient_unit);
                }
                // Adjust quantity based on the number of people
                $ingredients[$key]['quantity'] += floatval($ingredient_quantity);

                $i++;
            }
        }

        // Format ingredients correctly
        $formatted_ingredients = array();
        foreach ($ingredients as $ingredient => $details) {
            $formatted_ingredients[] = array(
                'name' => $ingredient,
                'quantity' => $details['quantity'],
                'unit' => $details['unit']
            );
        }

        wp_send_json_success(array(
            'recipes' => $recipes_content,
            'ingredients' => $formatted_ingredients
        ));
    } else {
        wp_send_json_error('No recipes selected');
    }
}

// AJAX handler to get recipe details
add_action('wp_ajax_wrp_get_recipe_details', 'wrp_get_recipe_details');
add_action('wp_ajax_nopriv_wrp_get_recipe_details', 'wrp_get_recipe_details');

function wrp_get_recipe_details() {
    if (isset($_POST['recipe_id'])) {
        $recipe_id = intval($_POST['recipe_id']);
        $recipe = get_post($recipe_id);
        if ($recipe) {
            $ingredients = array();
            $instructions = array();
            $hero_image = get_the_post_thumbnail_url($recipe_id, 'large'); // Fetch the hero image URL

            // Get ingredients
            $i = 0;
            while (true) {
                $ingredient_name = get_post_meta($recipe_id, "ingredient_{$i}_name", true);
                $ingredient_quantity = get_post_meta($recipe_id, "ingredient_{$i}_quantity", true);
                $ingredient_unit = get_post_meta($recipe_id, "ingredient_{$i}_unit", true);
                if (!$ingredient_name) break;

                $ingredients[] = array(
                    'name' => $ingredient_name,
                    'quantity' => $ingredient_quantity,
                    'unit' => $ingredient_unit
                );
                $i++;
            }

            // Get instructions
            $i = 0;
            while (true) {
                $instruction_text = get_post_meta($recipe_id, "instruction_{$i}_text", true);
                $instruction_image = get_post_meta($recipe_id, "instruction_{$i}_image", true);
                if (!$instruction_text) break;

                $instructions[] = array(
                    'text' => $instruction_text,
                    'image' => $instruction_image
                );
                $i++;
            }

            wp_send_json_success(array(
                'title' => get_the_title($recipe),
                'hero_image' => $hero_image,
                'ingredients' => $ingredients,
                'instructions' => $instructions
            ));
        } else {
            wp_send_json_error('Recipe not found');
        }
    } else {
        wp_send_json_error('No recipe ID provided');
    }
}

// Function to upload an image from a URL and return the attachment ID
if (!function_exists('wrp_upload_image_from_url')) {
    function wrp_upload_image_from_url($image_url) {
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
}

// Ensure custom fields are displayed in the post edit screen
if (!function_exists('wrp_ensure_custom_fields_displayed')) {
    function wrp_ensure_custom_fields_displayed() {
        add_post_type_support('post', 'custom-fields');
    }
}
add_action('admin_init', 'wrp_ensure_custom_fields_displayed');
?>
