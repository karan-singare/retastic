<!--
  * Custom Page for Tesimonials Construction
-->
<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<?php get_template_part('partials/slider'); ?>

<?php
/**
* Setup query to show the testimonial’
*/
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
  );
  $loop = new WP_Query( $args );

 ?>

  <main class="service testimonials">

    <div class="row">
      <div class="col-2-of-3">
          <div class="blogs-container">
            <?php while($loop->have_posts() ) : $loop->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="blog">
                  <div class="blog--img">
                    <?php if (has_post_thumbnail()): ?>
                      <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri() . '/images/about-1.jpg'; ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                  </div>

                  <h3 class="heading__tertiary blog--title"><?php the_title(); ?></h3>

                </div>
              </a>
              
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>

      </div>
      <div class="col-1-of-3">
        <?php
        /**
        * Setup query to show the testimonial’
        */
          $args = array(
            'post_type' => 'testimonial',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'ASC',
            'posts_per_page' => 1,
          );

          $loop = new WP_Query( $args );

         ?>
        <?php while($loop->have_posts() ) : $loop->the_post(); ?>

          <div class="testimonial-card-container">
            <div class="testimonial-card">
              <div class="card-img">
                <?php if (has_post_thumbnail()): ?>
                  <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Person on tour" class="story__img">
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri() . '/images/about-1.jpg'; ?>" alt="Person on tour" class="story__img">
                <?php endif; ?>
              </div>
            </div>
            <div class="testimonial-card-overlay">
              <p class="testimonial-card-title"><?php the_title(); ?></p>
              <?php the_excerpt(); ?>
            </div>
          </div>

          <a href="/testimonials" class="btn btn--black" id="sidebar-btn">View All testimonials</a>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <?php echo do_shortcode("[fluentform id='2']"); ?>
      </div>

    </div>





  </main>




<?php get_footer(); ?>
