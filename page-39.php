<!--
  * Custom Page for About Us Page
-->
<?php get_header(); ?>


  <?php if (have_posts()): the_post(); ?>
    <p><?php the_content(); ?></p>
    <h1><?php the_title(); ?></h1>
  <?php endif; ?>



<?php get_footer(); ?>
