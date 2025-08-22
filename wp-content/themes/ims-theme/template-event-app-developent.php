<?php
/*
Template Name: Event App Deelopment Page
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
            <h1>Event App Developement</h1>
        </div>
    </section>

    <!-- Content Section -->
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Event App Developement</span>
    </div>
    <hr />

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="left">
            <h2><span class="red-text">Event Apps Designed </span><br>for Seamless Engagement</h2>
        </div>
        <div class="right">
            <p>
                At IMS, we develop custom event apps that transform the attendee experience by creating
                deeper engagement and smoother interactions. Our Event App Development service
                empowers organizers to deliver immersive, real-time digital experiences before, during, and
                after events. Whether you're planning a corporate summit, cultural event, exhibition, or
                trade show, our apps are designed to enhance communication, simplify event logistics, and
                keep participants fully connected.
                <br><br>
                Every app is tailored to the unique needs of your event, offering features like speaker
                profiles, interactive agendas, push notifications, live polling, and in-app Q&A. With a sleek
                interface and easy navigation, attendees can access schedules, floor plans, and on-demand
                content with ease. These tools streamline the overall event journey, improve access to
                important information, and boost active participation.
                <br><br>
                Designed for both iOS and Android, our apps are scalable, secure, and built to integrate with
                registration systems and analytics tools. By providing real-time data on user behavior and
                preferences, they also support post-event analysis and planning. With IMS, you give your
                audience a modern, personalized mobile experience that delivers convenience and longlasting impact.
            </p>
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