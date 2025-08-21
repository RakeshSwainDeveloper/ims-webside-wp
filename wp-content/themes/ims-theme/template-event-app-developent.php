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
                Our Event App Development service empowers organizers to deliver immersive, real-time experiences
                right at attendees’ fingertips. Whether it’s a corporate summit, exhibition, trade show, or cultural
                event, we build custom mobile apps that enhance communication, streamline event logistics, and keep
                participants engaged before, during, and after the event.
                <br><br>
                Each app is tailored to your event’s unique goals, featuring schedules, speaker profiles, venue
                maps, push notifications, and live updates — all in one sleek interface. With user-friendly
                navigation and offline access, attendees can easily stay informed and connected. Interactive
                features like polls, Q&A sessions, and in-app chat foster community engagement and boost
                participation.
                <br><br>
                Our apps are built to scale, integrate seamlessly with your registration systems, and offer
                analytics to track engagement and optimize future events. Designed for both iOS and Android, we
                ensure your event app meets high standards of performance, security, and design — giving your
                audience a modern and memorable event experience.
            </p>
        </div>
    </section>


    <!-- <section class="service-content">
        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Event Apps Designed </span><br>
                    for Seamless Engagement
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    Our Event App Development service empowers organizers to deliver immersive, real-time experiences
                    right at attendees’ fingertips. Whether it’s a corporate summit, exhibition, trade show, or cultural
                    event, we build custom mobile apps that enhance communication, streamline event logistics, and keep
                    participants engaged before, during, and after the event.
                    <br><br>
                    Each app is tailored to your event’s unique goals, featuring schedules, speaker profiles, venue
                    maps, push notifications, and live updates — all in one sleek interface. With user-friendly
                    navigation and offline access, attendees can easily stay informed and connected. Interactive
                    features like polls, Q&A sessions, and in-app chat foster community engagement and boost
                    participation.
                    <br><br>
                    Our apps are built to scale, integrate seamlessly with your registration systems, and offer
                    analytics to track engagement and optimize future events. Designed for both iOS and Android, we
                    ensure your event app meets high standards of performance, security, and design — giving your
                    audience a modern and memorable event experience.
                </p>
            </div>
        </div>
    </section> -->



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