<?php get_header();
/* Template Name: HOME */ ?>

<section>
    <div class="page-width home-hero">
        <h1 class="hxl">The local handyman for your everyday needs</h1>
        <div>
            <a href="/contact" class="button white left">Contact Us</a>
            <a href="/our-work" class="button outline-white left">View Our
                Work</a>
        </div>
    </div>
</section>

<section>
    <div class="page-width home-ourwork">
        <h2 class="h2">WHAT WE DO</h2>
        <div class="grid-2">
            <?php 
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'job', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

            <?php if ( $wpb_all_query->have_posts() ) : ?>
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <?php if (get_field('show_on_homepage') == true): ?>
            <div class="category-card"
                style="background-image: url('<?php the_field('image'); ?>')">
                <p class="category-title h1"><?php the_title(); ?></p>
                <a href="<?php the_field('link'); ?>" class="category-link"></a>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <a class="button" style="margin-top: 25px;" href="/our-work">View
            All</a>
    </div>
</section>

<section>
    <div class="page-width home-about">
        <?php the_content(); ?>
    </div>
</section>

<section>
    <div class="page-width home-reviews">
        <h2 class="h2">REVIEWS</h2>
        <div class="grid-4">
            <?php 
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'review', 'post_status'=>'publish', 'posts_per_page'=>4)); ?>

            <?php if ( $wpb_all_query->have_posts() ) : ?>
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <div class="grid-item"">
                <div class=" grid-item-text"><?php the_field('text'); ?></div>
            <p class="small"><?php the_field('customer'); ?></p>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    </div>
</section>

<section>
    <div class="page-width home-cta">
        <div class="text">
            <p>Have a home renovation project you need some help with?</p>
            <p class="pxl">That's a case for Jase!</p>
        </div>
        <div class="flex">
            <a href="/contact" class="button left">Request a Quote</a>
            <a href="/our-work" class="button left">View Our Work</a>
        </div>
    </div>
</section>


<section style="display: none">
    <div class="page-width"></div>
    <custom-slider class="slider__container page-width">
        <div class="slider__slides">

        </div>
        <a class="slider__previous" style="display: none;"
            role="button">&#10096</a>
        <a class="slider__next" style="display: none" role="button">&#10097</a>
        <div class="slider__dots-container"></div>
    </custom-slider>
</section>

<?php get_footer(); ?>