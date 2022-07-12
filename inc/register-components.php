<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action( 'carbon_fields_register_fields', 'nh_register_vernm_components'  );

function nh_register_vernm_components(){

    Block::make( 'Banner home'  )
        ->add_fields( [

            Field::make( 'text', 'title', 'Title' ),
            Field::make( 'rich_text', 'detail', 'Detail' ),
            Field::make( 'file', 'img_desktop',  'Background Image/video (Desktop)' ) ,
            Field::make( 'file', 'img_mobile',  'Background Image/video (Mobile)' ) ,

        ])

        ->set_icon( 'heart' )
        ->set_keywords( [ 'home page' ] )
        ->set_description( __( 'Banner Generic Inner' ) )
        ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
            setData($fields);
            // var_dump($fields);
            get_template_part( 'components/banner-home' );            
        });
        

}