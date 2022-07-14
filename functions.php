<?php

/**
 * queens functions and definitions
 *
 * @package queens
 */

// Exit if afbessed directly.
defined('ABSPATH') || exit;

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMG', THEMEROOT . '/dist/img');
define('JS', THEMEROOT . '/dist/js');
define('CSS', THEMEROOT . '/dist/css');

define('DEFAULT_IMG', IMG . '/default-image.png');
define('ISDEV', false);

$prefix_includes = array(
	'/setup.php',                           // Theme setup and custom theme supports.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/useful-function.php',           		// Register Custom post type
	'/theme-settings-page.php',				// theme setting page , theme information 


	'/register-components.php',
	
	'/cpt.php',
	'/post-meta.php',

);

foreach ($prefix_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}

