<?php 
// Add your custom post type, taxanomy and 
defined( 'ABSPATH' ) || exit;

add_action( 'init', 'wpmm_register_post_type' );

function wpmm_register_post_type(){

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