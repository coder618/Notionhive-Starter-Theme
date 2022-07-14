<?php
/**
 * Theme basic setup.
*/

defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'nh_setup' );

if ( ! function_exists( 'nh_setup' ) ) {
	
	function nh_setup() {
		load_theme_textdomain( 'nh', get_template_directory() . '/languages' );
		add_theme_support( 'html5', [ 'gallery','caption',] );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'yoast-seo-breadcrumbs' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'title-tag' );

		// wooCommerce support
		add_theme_support('woocommerce');
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary_one' => __( 'Primary Menu', 'nh' ),
			'footer_menu' => __( 'Footer Menu', 'nh' ),
		) );

		add_theme_support( 'custom-background', apply_filters( 'nh_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

	}
}
 

// remove admin bar space because we want to put it bottom
add_action('get_header', 'nh_remonm_admin_bar_space');
function nh_remonm_admin_bar_space() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

// modify excerpt
function nh_excerpt_modify( $excerpt ) {
	return substr($excerpt, 0, 200) .'  ...';
}
add_filter( 'get_the_excerpt', 'nh_excerpt_modify' ); 



/* Register Widget Area */
add_action( 'widgets_init', 'nh_register_widget_area' );
function nh_register_widget_area(){
	register_sidebar(
		[
			'name' 			=> 'Footer Widget Area',
			'id'            => 'footer-widget-area',
			'before_widget' => '<div class = "each-footer-widget-wrapper">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>'
		]
	);
}


// add custom script to body and before footer
// function nm_add_body_script() {
// 	$code = trim(  carbon_get_theme_option('nm_after_body_tag_script') );
// 	if( $code ){
// 		echo $code;
// 	}
// }
// add_action( 'wp_body_open', 'nm_add_body_script' );

// function nm_top_header_script() {
// 	$code = trim(  carbon_get_theme_option('nm_high_header_scripts') );
// 	if( $code ){
// 		echo $code;
// 	}
// }
// add_action( 'nm_top_header_scripts', 'nm_top_header_script' );

