<?php get_header();
/* Template Name: OUR WORK */ ?>

<section>
    <div class="page-width home-ourwork">
        <h1 class="h1">What We Do</h1>
        <!-- <p>Pick a category or job below to see our work and what we can do to
            help you</p> -->
        <div class="grid-2">
            <?php 
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'job', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

            <?php if ( $wpb_all_query->have_posts() ) : ?>
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <div class="category-card"
                style="background-image: url('<?php the_field('image'); ?>')">
                <p class="category-title h1"><?php the_title(); ?></p>
                <a href="<?php the_field('link'); ?>" class="category-link"></a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>