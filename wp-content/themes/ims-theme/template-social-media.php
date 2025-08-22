<?php
/*
Template Name: Social Media Page
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
            <h1>Social Media Marketing Services</h1>
        </div>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Social media marketing services</span>
    </div>
    <hr />
    <!-- Content Section -->
    <section class="service-content">

        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Drive Growth with</span><br>
                    Strategic Marketing Plans
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    At IMS, our Social Media Marketing Services are designed to help brands grow their digital
                    presence, connect authentically with their audience, and build lasting communities. We
                    craft tailored strategies for platforms like Instagram, Facebook, LinkedIn, and TikTok,
                    aiming to boost reach and engagement while keeping your brand voice consistent and
                    impactful across every channel.<br><br>
                    Our team blends creative content development with data-driven campaign execution,
                    ensuring your message stays relevant and results-focused. From editorial calendars to
                    performance tracking, we work closely with you to maintain momentum and adapt
                    strategies in real time based on analytics and audience behaviour. Every post, promotion, or
                    paid campaign is part of a cohesive plan to move your brand forward.<br><br> Whether you're launching a new product, promoting an event, or focusing on long-term
                    brand loyalty, IMS provides the expertise to turn social media into a powerful business tool.
                    We focus on building meaningful relationships between your brand and your audience—
                    driving visibility, engagement, and measurable growth that aligns with your goals.
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