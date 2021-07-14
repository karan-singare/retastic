<!--
  * Custom Page for Contact Us Page
-->
<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>


  <main class="contact-us">
    <div class="heading heading__secondary u-center-text u-margin-bottom-big">Ready For A Change?</div>

      <div class="row">
        <p class="paragraph">
          Opus operates offices in the US and Canada. We strive to exceed our client’s needs wherever they are, regardless of location. Use the contact form on this page to reach us.
        </p>
        <?php echo do_shortcode("[fluentform id='2']"); ?>

      </div>


  </main>




<?php get_footer(); ?>
