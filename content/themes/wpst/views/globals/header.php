<a href="#navigation" class="is-hidden">Skip to Navigation</a>

<header class="header <?php echo ( !is_front_page() ) ? 'header--main' : ''; ?>">
    <div class="header__wrap">
        <?php if (!is_front_page()): ?> 
        <a href="/" class="header__logo | icon icon--large icon--logo-small" title="<?php bloginfo('name'); ?>">
            <span class="is-hidden">Visit the homepage</span>
        </a>
        <?php endif; ?>

        <nav class="nav-container | header__nav" id="navigation" role="navigation">
            <ul class="nav nav--primary | cf">
                <?php wp_nav_menu( array('theme_location' => 'primary', 'items_wrap' => '%3$s') ); ?>
            </ul>
        </nav>

        <a id="mobile-nav-toggle" class="u-button-reset | toggle | icon--menu-open">
            <span class="is-hidden">Toggle mobile menu</span>
        </a>

    </div>
</header>

<div class="main">
