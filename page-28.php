<!--
  * Residential Page
-->
<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>

<?php
  $title = 'Sample Heading';
  $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
  $slider_name = 'residential';

  $slider =  create_slider($title, $description, $slider_name);

 ?>

<?php echo $slider; ?>

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



  <main class="service">

    <div class="row">
      <div class="col-2-of-3">

        <?php if (have_posts()): ?>
          <?php $count=0; while( have_posts() ): the_post(); $count++; ?>

            <div class="content">
              <?php ?>
              <?php the_content(); ?>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <div class="col-1-of-3">
        <!-- sidebar testimonial card -->
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

        <!-- sidebar blogs list card -->
        <?php
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'ASC',
            'posts_per_page' => 5,
          );

          $loop = new WP_Query( $args );

         ?>
        <div class="blog-list-container">
          <h3 class="heading__tertiary">Our Latest Blogs</h3>
          <ul>
            <?php while($loop->have_posts() ) : $loop->the_post(); ?>
              <li class="blog-list-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
        </div>

        <a href="/blogs" class="btn btn--black" id="sidebar-btn">View All blogs</a>


        <!-- sidebar Form -->
        <?php echo do_shortcode("[fluentform id='2']"); ?>



      </div>
    </div>




  </main>




<?php get_footer(); ?>
