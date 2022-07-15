<?php
/**
 * Theme basic setup.
*/

defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'wpmm_setup' );

if ( ! function_exists( 'wpmm_setup' ) ) {
	
	function wpmm_setup() {
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
			'primary-menu' => __( 'Primary Menu', 'wpmm' ),
			'footer-menu' => __( 'Footer Menu', 'wpmm' ),
		) );

		add_theme_support( 'custom-background', apply_filters( 'wpmm_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

	}
}

// remove admin bar space because we want to put it bottom
add_action('get_header', 'wpmm_remove_admin_bar_space');
function wpmm_remove_admin_bar_space() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


/* Register Widget Area */
add_action( 'widgets_init', 'wpmm_register_widget_area' );
function wpmm_register_widget_area(){
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