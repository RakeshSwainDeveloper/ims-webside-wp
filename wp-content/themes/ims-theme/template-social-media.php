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
                    Our Social Media Marketing Services help brands connect with their audience, build community,
                    and grow their online presence. We create tailored strategies for platforms like Instagram,
                    Facebook, LinkedIn, and X (Twitter) to increase reach and engagement.<br><br>
                    From compelling content creation and calendar planning to ad campaigns and performance tracking,
                    we manage every aspect to ensure your brand remains consistent, relevant, and engaging. Our
                    approach combines creativity with data-driven insights for maximum impact.<br><br> Whether you're
                    launching a product, promoting an event, or building long-term visibility, our
                    social media experts help you build genuine relationships with your audience and drive
                    measurable results that support your business goals.
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