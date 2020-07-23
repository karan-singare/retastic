<div class="navigation">
  <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
  <label for="navi-toggle" class="navigation__button">
    <span class="navigation__icon">&nbsp;</span>
  </label>

  <div class="navigation__background">

  </div>

  <nav class="navigation__nav">

    <?php
      $args = [
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'navigation__list',
      ];

      wp_nav_menu($args);


     ?>
    <!-- <ul class="navigation__list">
      <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span> About Natours</a></li>
      <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span> your benefits</a></li>
      <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span> popular tours</a></li>
      <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span> stories</a></li>
      <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span> book now</a></li>
    </ul> -->


  </nav>
</div>
