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

    </footer>

</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>

</body>

</html>