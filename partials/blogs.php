<section class="section-tours" id="section-tours">
  <div class="u-center-text">
    <h2 class="heading__secondary u-margin-bottom-big">
      Our featured blogs
    </h2>
  </div>

  <div class="row">

    <?php if (have_posts()): ?>
    <?php $count=0; while( have_posts() ): the_post(); ?>
    <?php $id = get_the_ID(); ?>


    <?php if ($id == 93 || $id == 89 || $id == 16): ?>
    <?php $count++; ?>
    <div class="col-1-of-3">
      <div class="custom-card">
        <div class="custom-card__side custom-card__side--front">
          <div class="custom-card__picture custom-card__picture--<?php echo $count; ?>">
            &nbsp;
          </div>
          <h4 class="custom-card__heading">
            <span class="custom-card__heading-span custom-card__heading-span--<?php echo $count; ?>"><?php the_title(); ?></span>
          </h4>
          <div class="custom-card__details">
            <?php the_excerpt(); ?>
          </div>
        </div>
        <a class="btn-text read-more-btn" href="<?php the_permalink(); ?>" target="_blank" alt="<?php the_title_attribute(); ?>">Read more...</a>
      </div>

    </div>

    <?php endif; ?>


    <?php endwhile; ?>
    <?php endif; ?>

  </div>

  <div class="u-center-text u-margin-top-huge u-margin-bottom-big">
    <a href="/blogs" class="btn btn--green">Discover all Blogs</a>
  </div>
</section>
