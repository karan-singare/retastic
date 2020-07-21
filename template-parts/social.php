<?php
  $icons = ['tumblr', 'googleplus', 'linkedin', 'twitter', 'facebook'];

  $icons  = [
    'tumblr' =>     'http://www.tubmlr.com',
    'googleplus' => 'http://www.googleplus.com',
    'linkedin' => 'http://www.linkedin.com',
    'twitter' => 'http://www.twitter.com',
    'facebook' => 'http://www.facebook.com',
  ];

 ?>
<div class="social">
  <?php foreach ($icons as $key => $value): ?>
    <a href="<?php $value; ?>">
      <svg class="social__item">
        <use xlink:href="<?php echo get_template_directory_uri() . '/img/sprite.svg#icon-' . $key; ?>"></use>
      </svg>
    </a>
  <?php endforeach; ?>
</div>
