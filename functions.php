<?php
/**
 * Divi Godin Child — functions.php
 * Godin London Incorporated
 */

// Enqueue child theme styles and tokens
add_action('wp_enqueue_scripts', 'divi_godin_child_enqueue_styles');
function divi_godin_child_enqueue_styles() {
    $ver = wp_get_theme()->get('Version');
    wp_enqueue_style(
        'divi-godin-tokens',
        get_stylesheet_directory_uri() . '/css/00-tokens.css',
        array(),
        $ver
    );
    wp_enqueue_style(
        'divi-godin-child-style',
        get_stylesheet_uri(),
        array('divi-godin-tokens'),
        $ver
    );
}
