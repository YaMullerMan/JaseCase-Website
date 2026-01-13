<?php
/**
 * 
 * 
 * This template is for the Anxiety category
 * 
 * Template hierarchy:
 * 1. category-{slug}.php (e.g., category-anxiety.php)
 * 2. category-{id}.php (e.g., category-5.php)
 * 3. category.php
 * 4. archive.php
 * 5. index.php
 */

get_header(); ?>

<!-- Template Name: Category - Anxiety -->

<?php
        // Get current category info
        $current_category = get_queried_object();
        $cat_name = $current_category->name;
        $cat_description = $current_category->description;
        ?>

<!-- Category Header -->
<header class="category-header">
    <h1 class="category-title"><?php echo esc_html($cat_name); ?></h1>
    <?php if ($cat_description): ?>
    <div class="category-description">
        <?php echo wp_kses_post($cat_description); ?>
    </div>
    <?php endif; ?>
</header>

<!-- Posts Loop -->
<?php if (have_posts()): ?>
<div class="posts-grid">
    <?php while (have_posts()): the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>

        <?php if (has_post_thumbnail()): ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
            </a>
        </div>
        <?php endif; ?>

        <div class="post-content">
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>

            <div class="post-excerpt">
                <?php the_excerpt(); ?>
            </div>

            <a href="<?php the_permalink(); ?>" class="read-more">
                Read More
            </a>
        </div>

    </article>
    <?php endwhile; ?>
</div>

<?php else: ?>
<p>No posts found in this category.</p>
<?php endif; ?>

<?php get_footer(); ?>