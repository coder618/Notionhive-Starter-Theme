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


//Add custom taxanomy
add_action( 'init', 'nm_taxanomy_register', 0 );
function nm_taxanomy_register() {

    // register_taxonomy('ve-benefit',array('ve-community'), array(
    //     'hierarchical' => true,
    //     'labels' => [
    //         'name' => 'Benefit',
    //         'singular_name' => 'Benefit',
    //     ],
    //     'show_ui' => true,
    //     'show_admin_column' => true,
    //     'query_var' => true,
    // ));

    // register_taxonomy('ve-provinces',array('ve-community'), array(
    //     'hierarchical' => true,
    //     'labels' => [
    //         'name' => 'Provinces',
    //         'singular_name' => 'Provinces',
    //     ],
    //     'show_ui' => true,
    //     'show_admin_column' => true,
    //     'query_var' => true,
    // ));


    // register_taxonomy('faq-category',array('ve-faq'), array(
    //     'hierarchical' => true,
    //     'labels' => [
    //         'name' => 'Faq category',
    //         'singular_name' => 'Faq category',
    //     ],
    //     'show_in_rest' => true,
    //     'show_ui' => true,
    //     'show_admin_column' => true,
    //     'query_var' => true,
    // ));


    // $labels = array(
	// 	"name" => "Types of Bulletin",
	// 	"singular_name" => "Type of Bulletin",
	// );

	// $args = array(
	// 	"labels" => $labels,
	// 	"hierarchical" => true,
	// 	"show_ui" => true,
    //     'show_in_rest' => true,
	// 	"query_var" => true,
	// 	"rewrite" => array( 'slug' => 'news-event-type', 'with_front' => true ),
	// 	"show_admin_column" => false,
	// );
	// register_taxonomy( "news-event-type", array( "news-events" ), $args );

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

