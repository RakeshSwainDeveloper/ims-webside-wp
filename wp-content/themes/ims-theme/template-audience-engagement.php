<?php
/*
Template Name: Audience Engagement Solutions Page
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
            <h1>Audience Engagement Solutions</h1>
        </div>
    </section>
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Audience Engagement Solutions</span>
    </div>
    <hr />
    <!-- Content Section -->
    <section class="service-content">

        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Boost Participation With</span><br>
                    Audience Engagement
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    At IMS, we understand that a truly successful event goes beyond attendance—it’s about
                    involvement. Our Audience Engagement Solutions are designed to keep your audience
                    actively participating, using a range of interactive tools such as live polling, Q&A sessions,
                    real-time surveys, gamification, and more. These features transform passive viewers into
                    engaged participants, creating moments that are memorable and impactful.<br><br>
                    Beyond just interaction, our tools provide deep insights into attendee behavior and
                    preferences, enabling organizers to adapt content in real time and optimize future
                    strategies. Whether it’s a conference, product launch, seminar, or trade show, our
                    engagement solutions are tailored to align with your goals and the format of your event,
                    ensuring that every touchpoint is relevant and meaningful.<br><br>We aim to elevate the overall experience by fostering two-way communication that
                    connects, informs, and inspires. Our solutions make your events more dynamic, more
                    human, and more effective—helping you build stronger relationships and deliver lasting
                    impressions through seamless and smart audience engagement.
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