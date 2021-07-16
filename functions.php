<?php

function retastic_add_admin_page() {
  //Generate Retastic admin page
  // add_menu_page('Retatstic Theme Options', 'Retastic', 'manage_options', 'karan_retatstic', 'retastic_theme_create_page', 'dashicons-admin-customizer' , 110);

  //Generate Retastic admin subpages
  // add_submenu_page('karan_retastic', 'Retastic Contact Form', 'Contact Form', 'manage_options', 'karan_retastic_theme_contact', 'karan_retastic_theme_contact_page');
}

function retastic_scripts_enqueue() {
  wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', [], '1.0.0', 'all');
  wp_enqueue_style('custom_css', get_template_directory_uri() . '/css/retastic.css', ['bootstrap_css'], '1.0.0', 'all');
  wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery.min.js', [], '1.0.0', true);
  wp_enqueue_script('popper_js', get_template_directory_uri() . '/js/popper.min.js', ['jquery_js'], '1.0.0', true);
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery_js', 'popper_js'], '1.0.0', true);
  wp_enqueue_script('customs_js', get_template_directory_uri() . '/js/retastic.js', ['jquery_js', 'popper_js', 'bootstrap_js'], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'retastic_scripts_enqueue');

function retastic_theme_setup() {
  add_theme_support('menus');
  add_theme_support('post-thumbnails');

  /**
   * register_nav_menu($theme_location, $theme_description)
   * @param $theme_location => it is a unique name act as slug
   */
  register_nav_menu('primary', 'Primary Header Naviagation');
  register_nav_menu('secondary', 'Footer Navigation');


  /**
   * Contact Form Options
   */
  // register_setting('retastic-contact-options', 'activate');
  // add_setting_section('retastic-contact-options', 'Contact Form', 'retatstic_contact_section');

}

/**
 * menus support is enabled once the theme is initialized
 */
add_action('init', 'retastic_theme_setup');

/**
 * Custom Post Type
 */
function retatstic_custom_post_type() {
  $labels = [
    'name' => 'Divisions',
    'singular_name' => 'Division',
    'add_new' => 'Add Division',
    'all_items' => 'All Divisions',
    'edit_item' => 'Edit Division',
    'new_item' => 'New Division',
    'view_item' => 'View Division',
    'search_item' => 'Search Division',
    'not_found' => 'No items found in trash',
    'not_found_in_trash' => 'No items found in trash',
    'parent_item_colon' => 'Parent division',
  ];
  $args = [
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => [
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
    ],
    'taxonomies' => ['category', 'post_tags'],
    'menu_position' => 5,
    'exclude_from_search' => false,
  ];

  $testimonial_labels = [
    'name' => 'Testimonials',
    'singular_name' => 'Testimonial',
    'add_new' => 'Add Testimonial',
    'all_items' => 'All Testimonials',
    'edit_item' => 'Edit Testimonial',
    'new_item' => 'New Testimonial',
    'view_item' => 'View Testimonial',
    'search_item' => 'Search Testimonialn',
    'not_found' => 'No items found in trash',
    'not_found_in_trash' => 'No items found in trash',
    'parent_item_colon' => 'Parent Testimonial',
  ];
  $testimonial_args = [
    'labels' => $testimonial_labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => [
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
    ],
    'taxonomies' => ['category', 'post_tags'],
    'menu_position' => 5,
    'exclude_from_search' => false,
  ];

  register_post_type('division', $args);
  register_post_type('testimonial', $testimonial_args);
}

add_action('init', 'retatstic_custom_post_type');

/* INCLUDE WALKER FILE */
require get_template_directory() . '/inc/walker.php';

/* Sidebar Function */
function retastic_widget_setup() {
  register_sidebar([
    'name' => 'Sidebar',
    'id' => 'right-sidebar',
    'class' => 'custom',
    'description' => 'Standard Sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1',

  ]);
}
add_action('widgets_init', 'retastic_widget_setup');

/**
 * Helper functions
 */
 function create_slider($title, $description, $slider_name, $button = ['link' => '/blogs', 'text' => 'Recent Blogs']) {
  $path = './wp-content/themes/retastic/images/slider/' . $slider_name;

  if (is_dir($path)) {
    $images = scandir($path);
    $images = array_diff(scandir($path), array('.', '..'));

    $slider = '<div class="slider">';

    $checked = 'checked';
    $btn_link = $button['link'];
    $btn_text = $button['text'];

    foreach ($images as $image) {
      $image = $path . '/' . $image;
      $image = substr($image, 1);

      $slider .= "
      <input type='radio' name='slider' $checked />
      <div class='slider--img-container'>
      <img src='$image' alt='' />
      <div class='slider--content'>
      <h2>$title</h2>
      <p>$description</p>
      <a href='$btn_link' class='btn--black'>$btn_text</a>
      </div>
      </div>
      ";

      $checked = '';
    }

    $slider .= '</div>';

    return $slider;
  }

 }

function create_banner($title, $img_url) {
  print $title . '<br />';
  print $image_url . '<br />';

  if (is_file($img_url)) {
    $slider = '<div class="slider">';

    $slider .= "
    <div class='slider--img-container'>
    <img src='$img_url' alt='' />
    <div class='slider--content'>
    <h2>$title</h2>
    </div>
    </div>
    ";

    $slider .= '</div>';

    return $slider;
  }
}
