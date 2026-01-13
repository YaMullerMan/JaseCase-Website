<?php get_header(); ?>
<!-- Template Name: BLOG -->

<div class="page-banner"
    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-blog.jpg')">
    <div class="page-width">
        <a class="button" href="/contact">SUBMIT SAMPLE</a>
    </div>
</div>

<section>
    <div class="page-width blog">
        <h2 class="h3">NEWS</h2>
        <div class="grid-3">
            <?php 
		// the query
		$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

            <?php if ( $wpb_all_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <div class="blog-card">
                <div class="blog-card-img"
                    style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                </div>
                <p class="grid-item-title h3"><?php the_title(); ?></p>
                <p class="grid-item-text"><?php the_excerpt(); ?></p>
                <p class="blog-card-link small"><a
                        href="<?php the_permalink(); ?>">READ MORE
                        <span>&#x25B6; </span></a></p>
            </div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>