<footer class="footer">
  <div class="container container--center">
    <div class="footer__blogs">
      <h2 class="heading heading__secondary">From our blog</h2>
      <div class="blog blog--thumbnail">
        <img src="<?php echo get_template_directory_uri() . '/img/top-reasons-hiring.jpg'; ?>" alt="" class="blog__img">
        <h3 class="heading heading_tertiary">The Top Reasons Hiring a Landscaper Can Pay for Itself</h3>
      </div>
      <div class="blog blog--thumbnail">
        <img src="<?php echo get_template_directory_uri() . '/img/top-reasons-hiring.jpg'; ?>" alt="" class="blog__img">
        <h3 class="heading heading_tertiary">The Top Reasons Hiring a Landscaper Can Pay for Itself</h3>
      </div>
    </div>
    <div class="footer__services">
      <h2 class="heading heading__secondary">Opus Concierge Services</h2>
      <p>Want Exclusive World Class Benefits? Enquire About Opus Concierge Services</p>

      <form class="form" action="index.html" method="post">
        <div class="form__input-group">
          <input type="text" name="fullname" value="" class="form__input" placeholder="Name">
        </div>
        <div class="form__input-group">
          <input type="email" name="email" value="" class="form__input" placeholder="Email">
        </div>
        <div class="form__input-group">
          <input type="tel" name="telephone" value="" class="form__input" placeholder="Phone">
        </div>
        <input type="submit" name="submit" value="Concierge Inquiries" class="btn btn--primary">
      </form>
    </div>
    <div class="footer__contact">
      <h2 class="heading heading__secondary">Contact Opus</h2>

      <div class="email">
        <svg class="email__icon">
          <use xlink:href="<?php echo get_template_directory_uri() . '/img/email.svg#icon-email'; ?>"></use>
        </svg>
        <p>karansingare@email.com</p>
      </div>

      <div class="footer__social">
        <?php get_template_part('template-parts/social'); ?>
      </div>

    </div>
  </div>
</footer>
