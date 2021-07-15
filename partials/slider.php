<?php
$img_dir = get_template_directory_uri() . '/images/slider/residential-construction/';
  $slider_images = [];

  for ($i=1; $i < 5; $i++) {
    $slider_images[] = $img_dir . 'residential-construction-' . $i . '.jpg';
  }
  $slider_title = 'Residential Construction & Renovation';
  $slider_description = 'Experienced Reputable Custom Home Builder,Renovations,Best Remodeling,Construction,Top Additions,Residential Construction           Contractors,Kitchen,Bathrooms';

 ?>



 <div class="slider">

       <input type="radio" name="slider">
       <div class="slider--img-container">
         <img src="<?php echo $img_dir; ?>img-1.jpg" alt="">
         <div class="slider--content">
           <h2>Slide One</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           <a href="#">Read More</a>
         </div>
       </div>

       <input type="radio" name="slider">
       <div class="slider--img-container">
         <img src="<?php echo $img_dir; ?>img-2.jpg" alt="">
         <div class="slider--content">
           <h2>Slide Two</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           <a href="#">Read More</a>
         </div>
       </div>

       <input type="radio" name="slider" checked>
       <div class="slider--img-container">
         <img src="<?php echo $img_dir; ?>img-3.jpg" alt="">
         <div class="slider--content">
           <h2>Slide Three</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           <a href="#">Read More</a>
         </div>
       </div>

       <input type="radio" name="slider">
       <div class="slider--img-container">
         <img src="<?php echo $img_dir; ?>img-4.jpg" alt="">
         <div class="slider--content">
           <h2>Slide Four</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           <a href="#">Read More</a>
         </div>
      </div>

</div>
