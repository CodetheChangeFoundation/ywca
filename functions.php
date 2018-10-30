<?php

function bootstrap_enqueue_styles () {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );

}
function ywca_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('customcss', get_template_directory_uri() . '/assets/css/ywca.css', array(), '1.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/ywca.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'ywca_enqueue_styles' );

require get_template_directory() . '/custom-fields/primary-button.php';
require get_template_directory() . '/custom-fields/submit-button.php';


add_theme_support('menus');
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'Primary Navigation' ),
) );

add_theme_support('custom-header');

?>
