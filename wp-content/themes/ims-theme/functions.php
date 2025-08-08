<?php
/**
 * ims-theme functions and definitions
 */

/**
 * Enqueue theme styles and scripts
 */
function ims_theme_assets() {

    // Helper function to avoid filemtime() errors if file is missing
    $get_version = function ($relative_path) {
        $full_path = get_template_directory() . $relative_path;
        return file_exists($full_path) ? filemtime($full_path) : '1.0';
    };

    // Main stylesheet
    wp_enqueue_style(
        'ims-style',
        get_stylesheet_uri(),
        array(),
        $get_version('/style.css')
    );

    // Other CSS files
    wp_enqueue_style(
        'ims-header',
        get_template_directory_uri() . '/css/header.css',
        array(),
        $get_version('/css/header.css')
    );

    wp_enqueue_style(
        'ims-index',
        get_template_directory_uri() . '/css/index.css',
        array(),
        $get_version('/css/index.css')
    );

    wp_enqueue_style(
        'ims-footer',
        get_template_directory_uri() . '/css/footer.css',
        array(),
        $get_version('/css/footer.css')
    );

    // JS files
    wp_enqueue_script(
        'ims-include',
        get_template_directory_uri() . '/js/include.js',
        array('jquery'),
        $get_version('/js/include.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'ims_theme_assets');

/**
 * Register theme menus
 */
function ims_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'ims-theme'),
    ));
}
add_action('after_setup_theme', 'ims_register_menus');

/**
 * Fallback menu used if no WP menu is assigned
 */
function ims_fallback_menu() {
    ?>
    <nav class="nav" aria-label="Primary Navigation">
      <ul class="nav-links">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a></li>
        <li class="dropdown">
          <a href="#">Services <span aria-hidden="true">▾</span></a>
          <ul class="dropdown-menu">
            <li class="has-submenu">
              <a href="<?php echo esc_url(home_url('/event')); ?>">Events</a>
              <ul class="submenu">
                <li><a href="<?php echo esc_url(home_url('/event#event-management')); ?>">Event Management</a></li>
                <li><a href="<?php echo esc_url(home_url('/event#corporate-events')); ?>">Corporate Events</a></li>
                <li><a href="<?php echo esc_url(home_url('/event#private-events')); ?>">Private Events</a></li>
                <li><a href="<?php echo esc_url(home_url('/event#sports-events')); ?>">Sports Events</a></li>
                <li><a href="<?php echo esc_url(home_url('/event#wedding-production')); ?>">Wedding Production</a></li>
                <li><a href="<?php echo esc_url(home_url('/event#theming-decor')); ?>">Theming And Decor</a></li>
                <li><a href="<?php echo esc_url(home_url('/event#mall-activations')); ?>">Mall Activations</a></li>
                <li><a href="<?php echo esc_url(home_url('/event#light-sound')); ?>">Light And Sound</a></li>
              </ul>
            </li>

            <li class="has-submenu">
              <a href="<?php echo esc_url(home_url('/exhibitions')); ?>">Exhibitions</a>
              <ul class="submenu">
                <li><a href="<?php echo esc_url(home_url('/exhibitions#exhibition-stands')); ?>">Exhibition Stands</a></li>
                <li><a href="<?php echo esc_url(home_url('/exhibitions#exhibition-event')); ?>">Exhibition Event Services</a></li>
                <li><a href="<?php echo esc_url(home_url('/exhibitions#art-galleries')); ?>">Art Galleries & Shows</a></li>
                <li><a href="<?php echo esc_url(home_url('/exhibitions#shell-scheme')); ?>">Shell Scheme</a></li>
                <li><a href="<?php echo esc_url(home_url('/exhibitions#custom-stands')); ?>">Custom Stands</a></li>
                <li><a href="<?php echo esc_url(home_url('/exhibitions#event-staffing')); ?>">Event Staffing</a></li>
              </ul>
            </li>

            <li class="has-submenu">
              <a href="<?php echo esc_url(home_url('/branding')); ?>">Branding</a>
              <ul class="submenu">
                <li><a href="<?php echo esc_url(home_url('/branding#signage-bill')); ?>">Signage / Bill Boards</a></li>
                <li><a href="<?php echo esc_url(home_url('/branding#brand-activations')); ?>">Brand Activations</a></li>
                <li><a href="<?php echo esc_url(home_url('/branding#roadshows')); ?>">Roadshows</a></li>
                <li><a href="<?php echo esc_url(home_url('/branding#corporate-gifts')); ?>">Corporate Gifts</a></li>
              </ul>
            </li>

            <li class="has-submenu">
              <a href="<?php echo esc_url(home_url('/rentalAndSales')); ?>">Rental & Sales</a>
              <ul class="submenu">
                <li><a href="<?php echo esc_url(home_url('/rentalAndSales#event-furniture')); ?>">Event Furniture</a></li>
                <li><a href="<?php echo esc_url(home_url('/rentalAndSales#av')); ?>">AV</a></li>
                <li><a href="<?php echo esc_url(home_url('/rentalAndSales#light-sound')); ?>">Light And Sound</a></li>
                <li><a href="<?php echo esc_url(home_url('/rentalAndSales#branding-display')); ?>">Branding / Display Rentals</a></li>
              </ul>
            </li>

            <li><a href="<?php echo esc_url(home_url('/event-webside-developement')); ?>">Event Website Development</a></li>
            <li><a href="<?php echo esc_url(home_url('/event-app-developent')); ?>">Event App Development</a></li>
            <li><a href="<?php echo esc_url(home_url('/graphic-desine')); ?>">Graphic Design Services</a></li>
            <li><a href="<?php echo esc_url(home_url('/social-media')); ?>">Social Media Marketing</a></li>
            <li><a href="<?php echo esc_url(home_url('/ai-powered-chatbot')); ?>">AI-Powered Event Chatbot</a></li>
            <li><a href="<?php echo esc_url(home_url('/registration-ticket')); ?>">Registration & Ticketing Software</a></li>
            <li><a href="<?php echo esc_url(home_url('/audience-engagement')); ?>">Audience Engagement Solutions</a></li>
            <li><a href="<?php echo esc_url(home_url('/smart-networking')); ?>">Smart Networking & Matchmaking</a></li>
            <li><a href="<?php echo esc_url(home_url('/photo-gallery')); ?>">Photo Gallery & Cloud Sharing</a></li>
          </ul>
        </li>

        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a></li>
      </ul>
    </nav>
    <?php
}
