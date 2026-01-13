</main>
<?php wp_footer(); ?>
<footer>
    <div class="footer-container">
        <div class="footer-container-inner page-width">
            <div class="footer-left">
                <!-- <a href="/"><img width="225px" style="margin-left: -10px;"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png""></a> -->
                <p style="margin-top: 5px;">Your local, trusted handyman</p>
                <a href="/contact" class="button white left">Get a Quote</a>
            </div>
            <div class="footer-mid">
                <a href="https://www.facebook.com"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png"
                        width="45px"></a>
                <!-- <a href="/resources" class="button white">Explore topics</a> -->
            </div>
            <div class="footer-right">
                <a class="footer-link" href="/our-work">Our Work</a>
                <a class="footer-link" href="/about">About</a>
                <a class="footer-link" href="/contact">Contact</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p class="small">Copyright <?=date('Y')?> <b>Mullerman Studios</b></p>
    </div>
</footer>

<script>
<?php include 'js/script.js' ?>
</script>
<script>
<?php include 'js/slider-fade.js' ?>
</script>

</body>

</html>