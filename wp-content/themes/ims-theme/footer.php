<!-- footer.php -->
<footer class="site-footer">
  <div class="footer-top">
    <div class="footer-message">
      <h2><span class="highlight">Let’s Talk</span></h2>
      <h3>We Respond Quickly</h3>
    </div>
    <div class="footer-contact-info">
      <div>
        <h4>Location</h4>
        <p>Office 3051, Single Business Tower, Business Bay, PO Box 36677, Dubai, UAE</p>
      </div>
      <div>
        <h4>Contact</h4>
        <p>+971 4 5072060</p>
        <p><a href="mailto:info@imsuae.com">info@imsuae.com</a></p>
      </div>
    </div>
  </div>

  <div class="footer-links">
    <div>
      <h4>Quick Links</h4>
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-quick',
        'container' => false,
        'menu_class' => ''
      )); ?>
    </div>
    <div>
      <h4>Services</h4>
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-services',
        'container' => false,
        'menu_class' => ''
      )); ?>
    </div>
    <div>
      <h4>Follow Us</h4>
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-social',
        'container' => false,
        'menu_class' => ''
      )); ?>
    </div>
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="IMS Logo" />
      <p>We add value through our industry leading competence in offering a complete range of high impact solutions</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>Copyright © <?php echo date('Y'); ?> IMS Intelligent Marketing Solutions</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
