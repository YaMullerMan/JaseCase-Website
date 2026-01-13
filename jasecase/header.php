<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JaseCase | Your Local Handyman</title>
    <link rel="favicon" type="image/x-icon"
        href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/pages.css">
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/slider-fade.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <main>
        <header>
            <a href="#mainContent" tabindex="0" class="skip-link"
                aria-label="skip to content">Skip to Content</a>
            <div class="header-container page-width">
                <a href="/" class="header-logo"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
                <nav class="nav-items-container">
                    <a class="nav-item" href="/">Home</a>
                    <a class="nav-item" href="/our-work">Our Work</a>
                    <a class="nav-item" href="/about">About</a>
                    <!-- <a class="nav-item" href="/contact">Contact</a> -->
                    <a class="nav-item button"
                        href="tel:219-809-8757">219-809-8757</a>
                    <a class="nav-item button" href="contact">Request a
                        Quote</a>
                </nav>
                <div id="nav-icon4" class="mobile-nav-x">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="mobile-nav-container">
                <a class="mobile-nav-item" href="/">Home</a>
                <a class="mobile-nav-item" href="/our-work">Our Work</a>
                <a class="mobile-nav-item" href="/about">About</a>
                <a class="mobile-nav-item" href="/contact">Request a Quote</a>
            </div>
        </header>

        <?php opcache_reset(); ?>