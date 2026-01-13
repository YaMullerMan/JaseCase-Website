<?php get_header(); ?>
<!-- Template Name: RESOURCES -->

<section>
    <div class="page-width resources">
        <h1 class="h1">Resources</h1>
        <div class="grid-2">
            <?php
                // Get parent category by slug
                $parent_slug = 'resources';
                $parent_cat = get_category_by_slug($parent_slug);

                if ($parent_cat) {
                    $args = array(
                        'parent' => $parent_cat->term_id,
                        'hide_empty' => false,
                    );
                    
                    $child_categories = get_categories($args);
                    
                    foreach ($child_categories as $child) {
                        $cat_id = $child->term_id;
                        echo '<div class="grid-item">';
                        echo '<div class="grid-item-top">';
                        echo '<p class="grid-item-title h2" role="heading">' . esc_html($child->name) . '</p>';
                        echo '<p class="grid-item-text">' . esc_html($child->description) . '</p>';
                        echo '<a href="' . esc_html(get_category_link($cat_id)) . '" class="button">Explore</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>