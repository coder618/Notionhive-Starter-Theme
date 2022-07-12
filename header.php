<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */

// Exit if access directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php do_action('nm_top_header_scripts'); ?>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="theme-color" content="#3db294">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?> data-blog-id="<?php echo get_current_blog_id() ?>">
	<?php do_action('wp_body_open'); ?>


	<div class="overlay"></div>

	<div class="site" id="page" data-post-id="<?php echo get_the_ID(  ) ?>">

		<?php get_template_part("layout/main-navigation"); ?>