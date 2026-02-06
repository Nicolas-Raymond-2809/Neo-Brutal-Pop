<?php
/**
 * Neo-Brutal Pop functions and definitions
 */

function neo_brutal_pop_scripts() {
    // Enqueue Google Fonts
    // While FSE themes can define fonts in theme.json, enqueuing Google Fonts here ensures they load correctly
    // without needing to download them locally or use complex font face definitions in theme.json for remote URLs.
    wp_enqueue_style( 'neo-brutal-pop-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=VT323&display=swap', array(), null );

    // Enqueue main style (Block themes usually auto-enqueue style.css, but explicit is fine to ensure order)
    wp_enqueue_style( 'neo-brutal-pop-style', get_stylesheet_uri(), array(), '1.1.0' );
}
add_action( 'wp_enqueue_scripts', 'neo_brutal_pop_scripts' );

// Theme Setup
function neo_brutal_pop_setup() {
    add_theme_support( 'block-templates' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'neo_brutal_pop_setup' );
