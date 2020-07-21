<?php get_header(); ?>


  <?php if (have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <small>Posted on: <?php the_time('F j, Y') ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>
    <p><?php the_content(); ?></p>
  <?php endif; ?>



<?php get_footer(); ?>
