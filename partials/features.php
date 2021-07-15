<?php
/**
* Setup query to show the testimonial’
*/
  $args = array(
    'post_type' => 'division',
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => 4,
    'order' => 'ASC',
  );

  $loop = new WP_Query( $args );

 ?>

<section class="section-features">
      <div class="row">
        <?php $count=0; while($loop->have_posts() ) : $loop->the_post(); ?>
          <?php $count++; ?>
          <div class="col-1-of-4">

            <?php if (has_post_thumbnail()): ?>
              <div class="feature-box" style="background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php echo the_post_thumbnail_url(); ?>);">
                <h3 class="heading__tertiary u-margin-bottom-small"><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </div>
            <?php else: ?>
              <div class="feature-box">
                <h3 class="heading__tertiary u-margin-bottom-small"><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </div>
            <?php endif; ?>
          </div>

        <?php endwhile; ?>



      </div>
    </section>
