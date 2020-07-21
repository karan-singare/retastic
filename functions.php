<?php

function retastic_scripts_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/retastic.css', [], '1.0.0', 'all');
  wp_enqueue_script('customsjs', get_template_directory_uri() . '/js/retastic.js', ['jquery'], '1.0.0', true);
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

  register_post_type('division', $args);
}

add_action('init', 'retatstic_custom_post_type');
