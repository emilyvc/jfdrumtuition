<?php

/**
 ***************************************************************************
 * Front Page Template
 ***************************************************************************
 *
 * This template is used to show the front page of a WordPress website,
 * regardless of whether or not its a Static Page or Posts landing.
 * More info can be found here:
 * http://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 */



// Get the header
get_header();

?>

<div class="video-container">
    <span class="video-tint"></span>
    <div class="mobile-video"></div>
    <video autoplay  poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/book-film.jpg" class="video--background" loop>
      <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/videos/bg-video-jake.webm" type="video/webm">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/videos/bg-video-jake.mp4" type="video/mp4">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/videos/bg-video-jake.ogv" type="video/ogv">
    </video>
    <div class="video__strapline">
        <div class="container">
            <span class="icon icon--logo video__logo"></span>
            <span class="icon icon--logo-header"></span>
        </div>
    </div>
</div>

<?php get_footer(); ?>
