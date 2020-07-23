<?php get_header(); ?>

  <?php get_template_part('partials/navigation'); ?>




<main class="page">

  <div class="row">

    <div class="col-3-of-4">
      <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <h1 class="heading heading__primary post__heading"><?php the_title(); ?></h1>
          <div class="post__content">
            <?php the_content(); ?>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="col-1-of-4">
      <!-- sidebar -->
    </div>

  </div>



</main>






<?php get_footer(); ?>
