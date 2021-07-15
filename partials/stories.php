<?php
/**
* Setup query to show the testimonial’
*/
$args = array(
  'post_type' => 'testimonial',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'ASC',
  'posts_per_page' => 2,
);

$loop = new WP_Query( $args );

 ?>

<section class="section-stories">
  <div class="u-center-text">
    <h2 class="heading__secondary u-margin-bottom-big">
      We make people genuinely happy
    </h2>
  </div>

  <?php while($loop->have_posts() ) : $loop->the_post(); ?>
  <div class="row">
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
  </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

  <div class="u-center-text">
    <a href="/testimonials" class="btn-text">Read all testimonials &rarr;</a>
  </div>
</section>
