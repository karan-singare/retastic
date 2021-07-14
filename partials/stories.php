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



      <!-- <div class="row">
        <div class="story">
          <figure class="story__shape">
            <img src="<?php echo get_template_directory_uri() . '/images/about-1.jpg'; ?>" alt="Person on tour" class="story__img">
            <figcaption class="story__caption">Mary T</figcaption>
          </figure>
          <div class="story__text">
            <h3 class="heading__tertiary u-margin-bottom-small">Would definitely recommend</h3>
            <p>
              Both RJ and Russell were great to work with for my bathroom remodel. They kept me up to date thru the entire process and made sure that the finishing touches were perfect. Would definitely recommend hiring them for your next project!
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="story">
          <figure class="story__shape">
            <img src="<?php echo get_template_directory_uri() . '/images/about-2.jpg'; ?>" alt="Person on tour" class="story__img">
            <figcaption class="story__caption">Sara</figcaption>
          </figure>
          <div class="story__text">
            <h3 class="heading__tertiary u-margin-bottom-small">They generate their business from happy customers who recommend them</h3>
            <p>
             I was referred to them through a colleague. Best choice I made for myself and my family. My husband and I interviewed several builders, and once we met RJ personally from Opus we immediately felt comfortable. Our home is probably one of the nicest in the area and has given us nothing but happiness.
            </p>
          </div>
        </div>
      </div> -->

      <div class="u-center-text">
        <a href="/testimonials" class="btn-text">Read all stories &rarr;</a>
      </div>
    </section>

<?php wp_reset_postdata(); ?>
