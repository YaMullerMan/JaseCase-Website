<?php get_header(); ?>

<div class="page-banner blog-post" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-blogPost.png')">
</div>

<div class="page-width blog-post">
    <h1 class="h3">NEWS</h1>
    <?php
    while ( have_posts() ) :
        the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="blog-post__container">
                <img src="<?php the_post_thumbnail_url(); ?>" class="blog-post__img">
                    
                <div class="blog-post__content">
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h2 class="blog-post__title">', '</h2>' );
                    else :
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;

                    if ( 'post' === get_post_type() ) :
                        ?>
                        <div class="blog-post__metadata">
                        </div><!-- entry-meta -->
                    <?php endif; ?>

                    <div class="blog-post__text">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'firstbreach' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );
                    ?>
                    </div>

                    <?php
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'firstbreach' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>
            </div>
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php
        the_post_navigation(
            array(
                'prev_text' => '<span class="nav-subtitle"><span>&#x25C0; </span>' . esc_html__( 'Back', 'firstbreach' ) . '</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'firstbreach' ) . '<span> &#x25B6;</span> </span>',
            )
        );

    endwhile; // End of the loop.
    ?>
</div>

<?php get_footer(); ?>