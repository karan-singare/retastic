<!--
  * Custom Page for Residential Construction
-->
<?php get_header(); ?>

<?php get_template_part('partials/slider'); ?>





  <main class="service">

    <div class="row">
      <div class="col-3-of-4">

        <?php if (have_posts()): ?>
          <?php $count=0; while( have_posts() ): the_post(); $count++; ?>

            <div class="content">
              <?php the_content(); ?>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <div class="col-1-of-4">
        <p>Region for the siderbar</p>
      </div>
    </div>




  </main>




<?php get_footer(); ?>
