<?php get_header();
/* Template Name: ABOUT */ ?>

<section>
    <div class="page-banner" style="background-image: url('<?php echo get_field( "banner" ); ?>')">
        <div class="page-width">
            <!-- <a class="button" href="/sample">SUBMIT SAMPLE</a> -->
        </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/decorative-banner.png" width="100%">
</section>

<section>
    <div class="page-width about">
        <h1 class="h3">ABOUT KNS</h1>
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>