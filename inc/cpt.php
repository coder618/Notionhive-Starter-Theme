<?php 
defined( 'ABSPATH' ) || exit;

add_action( 'init', 'nm_register_post_type' );

function nm_register_post_type(){

	// register_post_type( "news-events", [
    //     'labels' => array(
    //         'name' => 'News & Events',
    //     ),
    //     'public' => true,
    //     'has_archive' => true,
    //     'show_in_rest' => true,
    //     'exclude_from_search'=> false,
    //     'supports' => [ 'title', 'editor'],
	// 	"rewrite" => array( "slug" => "news-events", "with_front" => true ),
	// 	"supports" => array( "title", "editor", "comments", "revisions", "page-attributes", "post-formats" ),

    //     'hierarchical' => false,
    // ] );

}


// add custom post type post in archive page
// function themeprefix_show_cpt_archives( $query ) {
//     if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
//         $query->set( 'post_type', array(
//             'nm_story',  'nav_menu_item'
//         ));
//         return $query;
//     }
// }
// add_filter( 'pre_get_posts', 'themeprefix_show_cpt_archives' );

