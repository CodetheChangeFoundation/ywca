<?php
require 'custom_title_field.php';

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );

}
function ywca_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('customcss', get_template_directory_uri() . '/assets/css/ywca.css', array(), '1.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/ywca.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'ywca_enqueue_styles' );

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

/* Theme setup */
// add_action( 'after_setup_theme', 'wpt_setup' );
//     if ( ! function_exists( 'wpt_setup' ) ):
//         function wpt_setup() {
//             register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
//         } endif;

// function wpt_register_js() {
//     wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
//     wp_enqueue_script('jquery.bootstrap.min');
// }
// add_action( 'init', 'wpt_register_js' );
// function wpt_register_css() {
//     wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
//     wp_enqueue_style( 'bootstrap.min' );
// }
// add_action( 'wp_enqueue_scripts', 'wpt_register_css' );


?>
