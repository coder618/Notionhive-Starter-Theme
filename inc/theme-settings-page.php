<?php

/**
 * Carbon filed theme settings options
 * 
 * 
 */

// carbon_get_post_meta( $id, $name )
// carbon_get_theme_option("key")
// use Carbon_Fields\Container;
// use Carbon_Fields\Field;
// use Carbon_Fields\Block;

// add_action('carbon_fields_register_fields', 'nh_theme_option_register');


// function nh_theme_option_register(){

//     $basic_options_container = Container::make('theme_options', __('Theme Options'))
//         ->add_fields(array(

//             Field::make('textarea', 'nm_high_header_scripts', 'Top Header Script' ),
//             Field::make('textarea', 'nm_after_body_tag_script', 'After body tag script' ),


//         ));


//     Container::make('theme_options', "Social links")
//         ->set_page_parent($basic_options_container) // reference to a top level container
//         ->add_fields(array(

//             Field::make('text', 'nh_facebook_link', "Facebook Link"),
//             Field::make('text', 'nh_twitter_link', "twitter Link"),
//             Field::make('text', 'nh_youtube_link', "Youtube Link "),
//             Field::make('text', 'nh_instagram_link', "instagram Link"),
//             Field::make('text', 'nh_pinterest_link', "Pinterest Link"),
//             Field::make('text', 'nh_linkedin_link', "linkedin Link"),
            
//         ));


// }
