<?php
/*
Template Name: Graphic Design Page
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>IMS Website</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/social-media.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
</head>


<body>

  <?php get_header(); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="social media Banner" class="hero-image">
        <div class="hero-overlay">
            <h1>Graphic Design services</h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="service-content">
        <div class="section-heading">
            <span class="dot"></span>
            <span class="label">Graphic Design services</span>
        </div>
        <hr />


        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Creative Designs That</span><br>
                    Captures Attention
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    Our Graphic Design Services are crafted to visually elevate your brand and communicate your message
                    with clarity and impact. Whether you’re launching a new product, planning an event, or building your
                    online presence, our team delivers high-quality visual assets tailored to your business goals.
                    <br><br>
                    From logos, brochures, banners, and exhibition graphics to social media creatives and digital ads,
                    we design with precision, creativity, and purpose. Each element is thoughtfully created to align
                    with your brand identity and speak directly to your target audience, ensuring consistency across all
                    platforms.
                    <br><br>
                    We blend strategy with aesthetics to help you stand out in a crowded marketplace. Our designs don’t
                    just look good — they drive results by enhancing engagement, building trust, and reinforcing brand
                    recall. Let us transform your ideas into powerful visuals that leave a lasting impression.
                </p>
            </div>
        </div>

    </section>

    <section class="cta">
        <img src="<?php echo get_template_directory_uri(); ?>/images/vision.jpg" alt="Vision" />
        <h2>
            <span class="red-text">Ready to Bring Your Vision to Life?</span><br />
            <span class="black-text">Let’s Talk!</span>
        </h2>
        <button class="enquire-btn">
            Enquire Now
            <span class="icon-arrow">➔</span>
        </button>
    </section>


  <!-- Footer include -->
  <?php get_footer(); ?>
  <!-- JS loader -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/include.js"></script>

</body>

</html>
