<?php defined('ABSPATH') || exit; ?>
<?php 
// carbon_get_theme_option("key")
$office_address =  carbon_get_theme_option("nm_office_address");
$tel =  carbon_get_theme_option("nm_tel");
$email =  carbon_get_theme_option("nm_email");
$privacy_policy_link =  carbon_get_theme_option("nm_privacy_policy_link");


?>
<footer>

    <div class="container">

        <div class="content">
            <div class="left-part">
                <?php if($office_address): ?>
                <div class="office_address">
                    <div class="title">Office</div>
                    <div class="detail"><?php echo $office_address ?></div>
                </div>
                <?php endif; ?>

                <div class="contact_address">
                    <div class="title">Contact</div>
                    <div class="detail">

                        <?php if($email): ?>
                            <div><a href="mailto:<?php echo $email ?>">E: <?php echo $email ?></a></div>
                        <?php endif; ?>
                        <?php if($email): ?>
                            <div><a href="tel:<?php echo $tel ?>">T: <?php echo $tel ?></a></div>
                        <?php endif; ?>

                    </div>

                </div>
                
            </div>
            
            <!-- left part  END-->


            <div class="right-part">
                <?php echo nh_get_social_links() ?>
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'footer_menu',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'fallback_cb'     => '',
                            'menu_id'         => 'footer-menu',
                            'depth'           => 1,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
                ?>
            </div>

        </div>

        

    </div>

</footer>

</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>

</body>

</html>