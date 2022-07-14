<?php
// Exit if afbessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'nh_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function nh_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/dist/css/theme.css' );
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/dist/css/theme.css', array(), $css_version );

		wp_deregister_script('jquery');
		wp_enqueue_script( 'jquery',get_template_directory_uri().'/dist/jquery.js', array(), $theme_version, true );

		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/dist/js/theme.js', array('jquery' ), 1, true );
		
	
		wp_localize_script( 'main-script', 'urls' , [
			'siteRoot' 	=> home_url( '/' ),
			'adminAjax' => admin_url( 'admin-ajax.php' ),
			'theme'		=> THEMEROOT
		]);
	}
} // endif function_exists( 'nh_scripts' ).

add_action( 'wp_enqueue_scripts', 'nh_scripts' );

/*

function nh_dashboard_enqueue($hook) {

	wp_enqueue_script( 'nh-admin-scripts', get_template_directory_uri() . '/dist/admin.js', array('jquery'), 1, true );
	wp_enqueue_style( 'nh-admin-styles', get_template_directory_uri() . '/dist/admin.css', array(), 1 );

	wp_localize_script( 'nh-admin-scripts', 'urls' ,[
		'siteRoot' => get_bloginfo('url'),
		'adminAjax' => admin_url( 'admin-ajax.php' )
	]);	

}

add_action('admin_enqueue_scripts', 'nh_dashboard_enqueue');

*/