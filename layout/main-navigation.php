<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php 
          wp_nav_menu(
              array(
                  'theme_location'  => 'primary-menu',
                  'container_class' => '',
                  'container_id'    => '',
                  'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                  'fallback_cb'     => '',
                  'menu_id'         => 'primary-menu',
                  'depth'           => 1,
                  'walker'          => new WP_Bootstrap_Navwalker(),
              )
            );
        ?>
    </div>
  </div>
</nav>