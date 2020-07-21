<!--
  * Custom Page for About Us Page
-->
<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
  <!-- <div class="media__container">
    <img src="<?php echo get_template_directory_uri() . '/images/about-us-1.jpg' ?>" alt="" class="media">
  </div> -->


  <main class="contact-us">
    <div class="heading heading__secondary u-center-text">Ready For A Change?</div>

    <div class="row">

      <p class="paragraph">
        Opus operates offices in the US and Canada. We strive to exceed our client’s needs wherever they are, regardless of location.
      </p>
      <p class="paragraph">
        Use the contact form on this page to reach us.
      </p>


      <div class="book">
        <div class="book__form">
          <form class="form">
            <div class="form__group">
              <input type="text" class="form__input" id="name" placeholder="Full Name" required>
              <label for="name" class="form__label">Name</label>
            </div>
            <div class="form__group">
              <input type="email" class="form__input" id="email" placeholder="Email" required>
              <label for="email" class="form__label">Email</label>
            </div>
            <div class="form__group">
              <input type="tel" class="form__input" id="phone" placeholder="Phone" required>
              <label for="email" class="form__label">Phone</label>
            </div>
            <div class="form__group">
              <label for="help" class="form__label">How Can We Help?</label>
              <select class="form__input" name="" id="help" placeholder="How Can We Help?" required>
                <option value="Project Management">Project Management</option>
                <option value="Commercial Construction">Commercial Construction</option>
                <option value="Residential Construction">Residential Construction</option>
                <option value="Architecture">Architecture</option>
                <option value="Interior Design">Interior Design</option>
                <option value="Landscaping Design">Landscaping Design</option>
                <option value="Pool and Spa">Pool and Spa</option>              </select>
            </div>
            <div class="form__group" required>
              <textarea class="form__input" id="message" placeholder="Message"></textarea>
              <label for="message" class="form__label">Message</label>
            </div>

            <div class="form__group">
              <button type="submit" class="btn btn--green">Send &rarr;</button>
            </div>
          </form>
        </div>
      </div>


    </div>




  </main>




<?php get_footer(); ?>
