<!--
  * Custom Page for Tesimonials Construction
-->
<?php get_header(); ?>

<?php get_template_part('partials/slider'); ?>

<?php
/**
* Setup query to show the testimonial’
*/
  $args = array(
    'post_type' => 'testimonial',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
  );

  $loop = new WP_Query( $args );

 ?>

  <main class="service testimonials">

    <div class="row">
      <div class="col-2-of-3">

          <?php while($loop->have_posts() ) : $loop->the_post(); ?>

            <div class="story">
              <figure class="story__shape">
                <?php if (has_post_thumbnail()): ?>
                  <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Person on tour" class="story__img">
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri() . '/images/about-1.jpg'; ?>" alt="Person on tour" class="story__img">
                <?php endif; ?>

                <figcaption class="story__caption"><?php the_excerpt(); ?></figcaption>
              </figure>
              <div class="story__text">
                <h3 class="heading__tertiary u-margin-bottom-small"><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </div>
            </div>

          <?php endwhile; ?>

      </div>
      <div class="col-1-of-3">
        <?php echo do_shortcode("[fluentform id='2']"); ?>
      </div>

      



    </div>

    <?php wp_reset_postdata(); ?>



  </main>




<?php get_footer(); ?>
