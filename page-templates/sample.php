<?php
/**
 * Template Name: Sample page template
 * 
 * 
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) : the_post();
    the_content();
endwhile;

get_footer();