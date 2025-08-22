<?php
/*
Template Name: AI Powered Chatbot Page
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
            <h1>AI-Powered Event Chatbot</h1>
        </div>
    </section>
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">AI-Powered Event Chatbot</span>
    </div>
    <hr />
    <!-- Content Section -->
    <section class="service-content">

        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Smarter Events With</span><br>
                    AI Event Chatbot
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    At IMS, we enhance the event experience with our AI-powered event chatbot, designed to
                    provide real-time assistance to attendees, exhibitors, and organizers. From answering
                    frequently asked questions to guiding guests through schedules, booth locations, or
                    registration steps, the chatbot operates instantly and around the clock—ensuring no
                    question goes unanswered and every interaction is seamless.<br><br>
                    Our chatbot is fully customizable for your event and can be easily integrated with your
                    website, event app, or kiosks. It supports multiple languages and delivers tailored
                    responses to suit your audience's needs. By automating repetitive queries and offering
                    personalized support, the chatbot reduces manual workload, improves communication, and
                    enhances satisfaction across every touchpoint.<br><br>Whether you're hosting a large-scale exhibition, a trade show, or a corporate event, the AI
                    chatbot elevates engagement, streamlines event flow, and captures valuable insights
                    through real-time analytics. With IMS, you can make your event more intelligent,
                    responsive, and efficient—creating an experience that truly stands out.
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