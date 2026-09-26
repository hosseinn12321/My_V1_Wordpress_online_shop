<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&family=Lalezar&display=swap');


}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
add_filter('formatted_woocommerce_price', function($price){

			$english = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
	    $persian = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );

			return str_replace( $english, $persian, $price );

});
