<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <div class="hero-image">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </div>

    <h2>Ingredients</h2>
    <ul>
        <?php
        $ingredient_ids = get_post_meta(get_the_ID(), 'ingredient_ids', true);
        if ($ingredient_ids) {
            foreach ($ingredient_ids as $ingredient_id) {
                $ingredient_post = get_post($ingredient_id);
                if ($ingredient_post) {
                    echo '<li>' . get_the_title($ingredient_post) . ' - ' . esc_html(get_post_meta($ingredient_id, 'ingredient_unit', true)) . '</li>';
                }
            }
        }
        ?>
    </ul>

    <h2>Instructions</h2>
    <ol>
        <?php
        $instructions = get_post_meta(get_the_ID(), 'instructions', true);
        if ($instructions) {
            foreach ($instructions as $index => $instruction) {
                echo '<li>' . esc_html($instruction['text']);
                if (!empty($instruction['image_url'])) {
                    echo '<br><img src="' . esc_url($instruction['image_url']) . '" alt="Step ' . ($index + 1) . ' image">';
                }
                echo '</li>';
            }
        }
        ?>
    </ol>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
