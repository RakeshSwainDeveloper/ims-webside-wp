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
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@600&display=swap" rel="stylesheet">
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

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Event App Developement</span>
    </div>
    <hr />
    <!-- Content Section -->
    <section class="service-content">

        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Creative Designs</span><br>
                    That Capture Attention
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    At IMS, our Graphic Design Services are tailored to bring your brand to life through
                    impactful visual storytelling. Whether you're launching a new product, promoting an event,
                    or strengthening your online presence, we deliver designs that not only reflect your identity
                    but also communicate your message with clarity, purpose, and creativity.
                    <br><br>
                    From logos and brochures to social media content, banners, and exhibition graphics, every
                    design is crafted with precision and aligned with your goals. We ensure each piece is not
                    only visually striking but also strategically aligned to speak directly to your audience. Our
                    focus on brand consistency across platforms ensures a cohesive presence that enhances
                    recognition and trust.
                    <br><br>
                    In a competitive marketplace, aesthetics alone are not enough. That’s why we combine
                    strong visual appeal with strategic thinking to create designs that engage, inform, and
                    convert. Whether you're aiming to increase awareness, boost interaction, or reinforce your
                    message, IMS transforms ideas into powerful visual assets that leave a lasting impression.
                </p>
            </div>
        </div>

    </section>

    <section class="cta">
        <img src="<?php echo get_template_directory_uri(); ?>/images/vision.png" alt="Vision" />
        <h2>
            <span class="red-text">Ready to Bring Your Vision to Life?</span><br />
            <span class="black-text">Let’s Talk!</span>
        </h2>
        <a href="<?php echo site_url('/contact'); ?>" class="enquire-btn" style="text-decoration: none;">
            Enquire Now
            <span class="icon-arrow">➔</span>
        </a>
    </section>


    <!-- Footer include -->
    <?php get_footer(); ?>
    <!-- JS loader -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/include.js"></script>

</body>

</html>