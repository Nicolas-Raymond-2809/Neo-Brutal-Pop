<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="masthead" class="site-header">
        <div class="folder-nav">
            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => false, // Fallback if no menu assigned? Or maybe list pages. Let's keep it simple.
                ) );
                ?>
                <!-- Fallback static links if menu is empty to demonstrate the style -->
                <?php if ( ! has_nav_menu( 'primary' ) ) : ?>
                <ul>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
                <?php endif; ?>
            </nav>
        </div>

        <div class="container site-branding">
            <?php
            if ( is_front_page() && is_home() ) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
            endif;
            $neo_brutal_description = get_bloginfo( 'description', 'display' );
            if ( $neo_brutal_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $neo_brutal_description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

    </header><!-- #masthead -->

    <div id="content" class="site-content container">
