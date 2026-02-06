<?php
/**
 * Neo-Brutal Pop functions and definitions
 */

function neo_brutal_pop_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'neo-brutal-pop-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=VT323&display=swap', array(), null );

    // Enqueue main style
    wp_enqueue_style( 'neo-brutal-pop-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'neo_brutal_pop_scripts' );

// Add theme support
function neo_brutal_pop_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'neo-brutal-pop' ),
    ) );
}
add_action( 'after_setup_theme', 'neo_brutal_pop_setup' );
