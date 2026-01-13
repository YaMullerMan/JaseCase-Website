<?php get_header();
/* Template Name: SIMPLE */ ?>

<section>
    <div class="page-width">
        <h1 class="h1" style="text-align: center;">
            <?php echo get_the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>