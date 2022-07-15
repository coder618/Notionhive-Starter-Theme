<?php defined('ABSPATH') || exit; ?>

    <footer>

        <div class="container">

            <?php 
                wp_nav_menu(
                    array(
                        'theme_location'  => 'footer-menu',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'fallback_cb'     => '',
                        'menu_id'         => 'footer-menu',
                        'depth'           => 1,
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    )
                );
            ?>

            <div class="widgets-wrapper">
                <?php dynamic_sidebar( 'footer-widget-area' ); ?>
            </div>

        </div>

    </footer>

</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>

</body>

</html>