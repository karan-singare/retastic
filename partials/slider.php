<?php
$img_dir = get_template_directory_uri() . '/images/slider/residential-construction/';
  $slider_images = [];

  for ($i=1; $i < 5; $i++) {
    $slider_images[] = $img_dir . 'residential-construction-' . $i . '.jpg';
  }
  $slider_title = 'Residential Construction & Renovation';
  $slider_description = 'Experienced Reputable Custom Home Builder,Renovations,Best Remodeling,Construction,Top Additions,Residential Construction           Contractors,Kitchen,Bathrooms';

 ?>


<div class="slider-container">
  <div class="slider">
    <img src="<?php echo $slider_images[0]; ?>" alt="">
  </div>
  <div class="slider-overlay">
    <h1 class="slider-title"><?php echo $slider_title; ?></h1>
    <p class="slider-description"><?php echo $slider_description; ?></p>
  </div>
</div>
