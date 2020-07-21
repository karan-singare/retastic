<!--
  * Template Name: Home page
-->
<?php get_header(); ?>


<?php
  query_posts(['post_type' => 'division']);

  while (have_posts()): the_post();?>

  <div class="division">
    <h1 class="heading heading__primary heading__narrow"><?php echo the_title(); ?></h1>

<?php
    the_content();
    echo "</div>";
  endwhile;

  wp_reset_query();

 ?>


<?php get_footer(); ?>
