<header class="navigation-header">
  <div class="row">
    <nav>
      <div class="logo-box">
        <a href="/"><img src="<?php echo get_template_directory_uri() . '/images/logo.png';  ?>" alt="Logo"></a>
      </div>

      <div class="navbar-navigation">
        <?php
          $args = [
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'navigation__list',
          ];

          wp_nav_menu($args);
         ?>
      </div>
      </div>
    </nav>



  </div>



</header>
