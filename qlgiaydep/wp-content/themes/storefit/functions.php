<?php
/**
 * Define Theme Version
 */
define( 'STOREFIT_THEME_VERSION', '2.6' );

function storefit_css() {
	$parent_style = 'retailsy-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'storefit-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('storefit-default',get_stylesheet_directory_uri() .'/assets/css/color/default.css');
	wp_dequeue_style('retailsy-default');
	
	wp_enqueue_style('storefit-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	// wp_dequeue_style('retailsy-media-query');	
}
add_action( 'wp_enqueue_scripts', 'storefit_css',999);

require get_stylesheet_directory() . '/inc/customizer/customizer-options/storefit-pro.php';

/**
 * Import Settings From Parent Theme
 *
 */
function storefit_parent_theme_options() {
	$retailsy_mods = get_option( 'theme_mods_retailsy' );
	if ( ! empty( $retailsy_mods ) ) {
		foreach ( $retailsy_mods as $retailsy_mod_k => $retailsy_mod_v ) {
			set_theme_mod( $retailsy_mod_k, $retailsy_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'storefit_parent_theme_options' );

/****
 * Let WordPress Manage 
*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-logo' );
add_theme_support( 'align-wide' );
add_theme_support( 'add_editor_style()' );
add_theme_support( 'html5', array('search-form','comment-form','comment-list','gallery','caption'));