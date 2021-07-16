<?php
$img_dir = get_template_directory_uri() . '/images/slider/residential-construction/';
  $slider_images = [];

  for ($i=1; $i < 5; $i++) {
    $slider_images[] = $img_dir . 'residential-construction-' . $i . '.jpg';
  }
  $slider_title = 'Residential Construction & Renovation';
  $slider_description = 'Experienced Reputable Custom Home Builder,Renovations,Best Remodeling,Construction,Top Additions,Residential Construction           Contractors,Kitchen,Bathrooms';

  $slider =  create_slider($slider_title, $slider_description, 'residential');

 ?>

<?php echo $slider; ?>
