<?php

/**
 ***************************************************************************
 * Example Custom Template
 ***************************************************************************
 *
 * All custom templates should be prefixed with `tpl-` for navigation
 * purposes. To associate this template with WordPress, write the
 * template name underneath like so.
 *
 * Template Name: Gallery
 *
 */



// Get the header
get_header();

?>

<main class="section">
    <div class="container">
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ): ?>
                <?php the_post(); ?>

                <article>
                    <h1><?php the_title(); ?></h1>
                    <?php if ( $post->post_excerpt ): ?>
                        <?php echo get_the_excerpt(); ?>
                    <?php endif; ?>

                    <h2 class="u-push-bottom/2">Photos</h2>
                    <div class="grid grid--spaced">
                        <div class="grid__item">
                            <?php get_template_part( 'views/page/gallery/list' ); ?>
                            <?php get_template_part( 'views/page/gallery/lightbox' ); ?>
                        </div>
                    </div>

                     <h2 class="u-push-top@2 u-zero-bottom">Videos</h2>
                    <div class="grid grid--spaced">
                        <div class="grid__item">
                            <?php get_template_part( 'views/page/gallery/videos' ); ?>
                        </div>
                    </div>


                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <?php get_template_part( 'views/errors/404-posts' ); ?>
        <?php endif; ?>
    </div>
    <!-- .container -->
</main>

<?php get_footer(); ?>
