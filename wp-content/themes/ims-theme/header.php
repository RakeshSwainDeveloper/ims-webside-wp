<!-- header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container header-container">

    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="IMS Intelligent Marketing Solutions Logo" />
    </a>

    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-toggle" aria-label="Toggle navigation">☰</button>

    <!-- Navigation -->
    <div class="nav-wrapper">
      <nav class="nav" aria-label="Primary Navigation">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'nav-links',
            'container'      => false
          ));
        ?>
      </nav>
    </div>

    <!-- Call to Action -->
    <div class="cta-wrapper">
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-cta" role="button">
        Get In Touch <span aria-hidden="true">↗</span>
      </a>
    </div>

  </div>
</header>
