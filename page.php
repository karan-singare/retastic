<?php get_header(); ?>



<main class="page">

  <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <h1 class="heading heading__primary post__heading"><?php the_title(); ?></h1>
      <div class="post__content">
        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>

</main>






<?php get_footer(); ?>
