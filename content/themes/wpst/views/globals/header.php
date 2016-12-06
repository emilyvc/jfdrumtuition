<a href="#navigation" class="is-hidden">Skip to Navigation</a>

<header class="header">
    <div class="header__wrap">

        <a href="/" class="logo | header__logo | icon--logo-small" title="<?php bloginfo('name'); ?>">
            <span class="is-hidden">Visit the homepage</span>
        </a>

        <nav class="nav-container | header__nav" id="navigation" role="navigation">
            <ul class="nav nav--primary | cf">
                <?php wp_nav_menu( array('theme_location' => 'primary', 'items_wrap' => '%3$s') ); ?>
            </ul>
        </nav>

        <!-- <button id="mobile-nav-toggle" class="u-button-reset | toggle | icon--menu-open">
            <span class="is-hidden">Toggle mobile menu</span>
        </button> -->

    </div>
</header>

<div class="main">
