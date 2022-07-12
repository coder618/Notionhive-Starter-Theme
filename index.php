<?php 
/**
 * Default page template
 * Full Width only contain Header And Footer
 */
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) : the_post();
    the_content();
endwhile;

get_footer();