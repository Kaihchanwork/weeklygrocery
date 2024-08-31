<?php

if(!function_exists('bridge_qode_child_theme_enqueue_scripts')) {

	Function bridge_qode_child_theme_enqueue_scripts() {
		wp_register_style('bridge-childstyle', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('bridge-childstyle');
	}

	add_action('wp_enqueue_scripts', 'bridge_qode_child_theme_enqueue_scripts', 11);
}


function create_custom_post_types() {
    // Register Recipes post type
    register_post_type('recipes',
        array(
            'labels'      => array(
                'name'          => __('Recipes'),
                'singular_name' => __('Recipe'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail'),
            'rewrite'     => array('slug' => 'recipes'),
        )
    );

    // Register Ingredients post type
    register_post_type('ingredients',
        array(
            'labels'      => array(
                'name'          => __('Ingredients'),
                'singular_name' => __('Ingredient'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title'),
            'rewrite'     => array('slug' => 'ingredients'),
        )
    );
}
add_action('init', 'create_custom_post_types');
