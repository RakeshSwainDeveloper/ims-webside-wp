<?php
// Theme setup
function ims_theme_setup() {
  // Navigation menus
  register_nav_menus(array(
    'primary'         => 'Primary Menu',
    'footer-quick'    => 'Footer Quick Links',
    'footer-services' => 'Footer Services',
    'footer-social'   => 'Footer Social Links',
  ));

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ims_theme_setup');

// Enqueue styles and scripts
function ims_enqueue_assets() {
  // CSS
  wp_enqueue_style('header-style', get_template_directory_uri() . '/css/header.css');
  wp_enqueue_style('footer-style', get_template_directory_uri() . '/css/footer.css');

  // JavaScript
  wp_enqueue_script('include-js', get_template_directory_uri() . '/js/include.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'ims_enqueue_assets');
