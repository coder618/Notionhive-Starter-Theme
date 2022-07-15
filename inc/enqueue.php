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
		wp_enqueue_style( 'theme-style', THEMEROOT . '/dist/css/theme.css', [], $css_version );

		wp_deregister_script('jquery');
		wp_enqueue_script( 'jquery',THEMEROOT.'/dist/jquery.js', [], $theme_version, true );

		wp_enqueue_script( 'theme-script', THEMEROOT . '/dist/js/theme.js', ['jquery'], 1, true );
		
	
		wp_localize_script( 'theme-script', 'urls' , [
			'siteRoot' 	=> home_url( '/' ),
			'adminAjax' => admin_url( 'admin-ajax.php' ),
			'theme'		=> THEMEROOT
		]);

	}
} // endif function_exists( 'nh_scripts' ).

add_action( 'wp_enqueue_scripts', 'nh_scripts' );
