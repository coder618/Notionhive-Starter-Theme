<?php 
/**
 * Product page meta box will register here
 * 
 * carbon_get_post_meta( $id, $name ) 
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action( 'carbon_fields_register_fields', 'nh_product_page_meta' );

function nh_product_page_meta() {

    // Container::make( 'post_meta', "Essential Information" )
    //     ->where( 'post_type', '=', 've-community' )
    //     ->add_fields([
    //         Field::make( 'rich_text', 'address', 'Address' ),
    //         Field::make( 'text', 'landing_page_link', 'Landing page url' ),
    //         Field::make( 'text', 'phone_number', 'Phone number  ' ),
    //         Field::make( 'text', 'sherpa_id', 'Sherpa CRM ID' ),
    //         Field::make( 'text', 'post_code', 'Post code( eg. 1A1 2B2 )' ),

    //     ]);


}

// google map key for carbon field
// add_filter( 'carbon_fields_map_field_api_key', 'crb_get_gmaps_api_key' );
// function crb_get_gmaps_api_key( $key ) {
//     return GMAP;
// }
