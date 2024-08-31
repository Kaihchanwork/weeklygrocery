<?php
/*
Plugin Name: Remove Duplicate Posts
Description: Automatically removes posts with duplicate titles and alerts the admin of the number of posts deleted.
Version: 1.1
Author: Your Name
*/

function remove_duplicate_posts() {
    global $wpdb;

    // Get all post titles and their IDs
    $posts = $wpdb->get_results("
        SELECT post_title, GROUP_CONCAT(ID) as ids
        FROM $wpdb->posts
        WHERE post_type = 'post' AND post_status = 'publish'
        GROUP BY post_title
        HAVING COUNT(*) > 1
    ");

    $deleted_count = 0;

    foreach ($posts as $post) {
        // Get all post IDs except the first one
        $ids = explode(',', $post->ids);
        array_shift($ids);

        foreach ($ids as $id) {
            // Delete the duplicate posts
            wp_delete_post($id, true);
            $deleted_count++;
        }
    }

    // Store the count of deleted posts in a transient
    set_transient('deleted_duplicate_posts_count', $deleted_count, 60);
}

// Hook the function to an appropriate action, e.g., when the admin dashboard is loaded
add_action('admin_init', 'remove_duplicate_posts');

function show_deleted_posts_notice() {
    // Get the count of deleted posts from the transient
    if ($count = get_transient('deleted_duplicate_posts_count')) {
        // Delete the transient
        delete_transient('deleted_duplicate_posts_count');
        ?>
        <div class="notice notice-success is-dismissible">
            <p><?php echo $count; ?> duplicate posts were deleted.</p>
        </div>
        <?php
    }
}

// Hook the notice function to the admin_notices action
add_action('admin_notices', 'show_deleted_posts_notice');
