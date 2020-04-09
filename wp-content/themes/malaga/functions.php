<?php 
/**
 * Child theme functions file.
 */
function spacious_child_enqueue_styles() { 
    // Parent theme style handle 'spacious_style'.
    $parent_style = 'spacious_style';
 
    // Enqueue parent and child theme style.css.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'spacious_child_style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get( 'Version' ) );
}
 
add_action( 'wp_enqueue_scripts', 'spacious_child_enqueue_styles' );