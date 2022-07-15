<?php defined('ABSPATH') || exit; ?>

    <footer>

        <div class="container">

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