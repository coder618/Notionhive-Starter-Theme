<?php 
$id = get_the_ID(  );

$images             = carbon_get_post_meta($id, 'map_images' );
// $booking_link       = carbon_get_post_meta($id, 'booking_link' );
$landing_page_link  = carbon_get_post_meta($id, 'landing_page_link' );
$booking_link = carbon_get_theme_option("booking_page_url") . "/?cid=".$id ;

 
?>

<div class="ve-map-info-box">
    <div class="imgs">
        <?php 
            $total_img = 0;
            foreach($images as $k => $att_id){

                if( wp_get_attachment_image( $att_id, 'medium', false ) ){
                    $total_img = $total_img + 1;
                    $img_class = $k == 0?'active' : '' ;
                    echo wp_get_attachment_image( $att_id, 'medium', false, ['class'=>  $img_class ] );
                }

            }
        ?>
    </div>
    <?php if( $total_img > 1 ): ?>
    <div class="slider-btns">
        <button class="btn change-img-btn previous-img"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12-5.373-12-12-12-12 5.373-12 12zm7.58 0l5.988-5.995 1.414 1.416-4.574 4.579 4.574 4.59-1.414 1.416-5.988-6.006z"/></svg></button>
        <button class="btn change-img-btn next-img"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.568 18.005l-1.414-1.415 4.574-4.59-4.574-4.579 1.414-1.416 5.988 5.995-5.988 6.005z"/></svg></button>
    </div>
    <?php endif ?>

    <div class="title"><?php echo get_the_title(  ) ?></div>

    <div class="btns">
        <a href="<?php echo esc_url_raw( $booking_link ) ?>" class="btn btn-book-a-tour">BOOK A TOUR</a>
        <a href="<?php echo esc_url_raw( $landing_page_link ) ?>" class="btn btn-see-more">SEE MORE</a>
    </div>

</div>