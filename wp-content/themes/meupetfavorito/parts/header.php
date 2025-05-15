<header>
  <div class="menu container">
    <div class="nav">
      <?php wp_nav_menu([
        'theme_location' => 'header-menu',
        'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0',
        'container'      => false,
        'fallback_cb'    => false,
        'depth'          => 2,
      ]); ?>
    </div>
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <h1>Meu Pet Favorito</h1>
    </a>
    <img class=" logo-img"
      src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo Meu Pet Favorito" />
  </div>
</header>