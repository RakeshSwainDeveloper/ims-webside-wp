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
 
function handle_contact_form_submission() {
    if (isset($_POST['contact_form_nonce']) && wp_verify_nonce($_POST['contact_form_nonce'], 'submit_contact_form')) {
        
        global $wpdb;

        $table = $wpdb->prefix . 'contact_form_submissions';

        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        $wpdb->insert($table, [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
        ]);

        wp_redirect(add_query_arg('status', 'success', wp_get_referer()));
        exit;
    }
}
add_action('admin_post_nopriv_contact_form', 'handle_contact_form_submission');
add_action('admin_post_contact_form', 'handle_contact_form_submission');