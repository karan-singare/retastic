<!--
  *This is the page where all the listing of all the blogs will appear
  *In this page the featureed image along with heading will be shown
-->
<?php get_header(); ?>



  <main class="blogs-page">
    <div class="row">
      <div class="col-3-of-4">
        <?php if (have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p class="paragraph">Posted on: <?php the_time('F j, Y') ?> at <?php the_time('g:i a'); ?></p>

            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php the_post_thumbnail(); ?>
              </a>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-1-of-4">

        <!--sidebar will go here-->



      </div>
    </div>
  </main>



<?php get_footer(); ?>
