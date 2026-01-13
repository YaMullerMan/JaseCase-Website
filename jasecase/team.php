<?php get_header();
/* Template Name: TEAM */ ?>

<style>
    main {
        margin-bottom: 0;
    }
</style>

<section>
    <div class="page-banner" style="background-image: url('<?php echo get_field( "banner" ); ?>')">
        <div class="page-width">
            <!-- <a class="button" href="/sample">SUBMIT SAMPLE</a> -->
        </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/decorative-banner.png" width="100%">
</section>

<section>
    <div class="page-width team">
        <p class="page-text">At KNS (Kalmbach Nutritional Services), our strength lies in a unique blend of expertise, innovation, and global reach. Our talented and experienced team brings applied nutritional expertise and industry-leading research to create commercially viable solutions. Backed by a robust global ingredient sourcing platform, we deliver value-added nutritional products and services tailored to your specific needs. Whether you're looking for high-quality ingredients or custom nutritional solutions, KNS is committed to providing comprehensive support that drives your success.</p>
        <h1 class="h3">TEAM</h1>

        <div class="grid-2">
            <div class="grid-item">
                <img class="grid-item-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/paul-kalmbach-jr.png">
                <p class="grid-item-title h4" role="heading">Paul Kalmbach Jr</p>
                <p class="grid-item-text">President</p>
            </div>
            <div class="grid-item">
                <img class="grid-item-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/paul-kalmbach-sr.png">
                <p class="grid-item-title h4" role="heading">Paul Kalmbach Sr</p>
                <p class="grid-item-text">CEO</p>
            </div>
        </div>
        <div class="grid-4">
            <?php 
            $posts = get_posts(array(
                'numberposts' => -1,
                'post_type' => 'staff'
            ));

            if($posts)
            {
                foreach($posts as $post)
                {
                    echo '<div class="grid-item">';
                    echo '<img class="grid-item-img" src="' . get_field('image') . '" class="image">';
                    echo '<p class="grid-item-title h4">' . get_the_title($post->ID) . '</p>';
                    echo '<p class="grid-item-text">' . get_field('position') . '</p>';
                    echo '<p class="grid-item-text">' . get_field('college') . '<br>';
                    echo get_field('experience') . '</p>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>