<?php
/*
Template Name: Smart Networking & Matchmaking Page
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
        <img src="images/waiters.jpg" alt="social media Banner" class="hero-image">
        <div class="hero-overlay">
            <h1>Smart Networking & Matchmaking</h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="service-content">
        <div class="section-heading">
            <span class="dot"></span>
            <span class="label">Smart networking & Matchmaking</span>
        </div>
        <hr />


        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Smarter Connections With</span><br>
                    Matchmaking & Networking
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    Our AI-powered event chatbot delivers seamless, real-time assistance to attendees, exhibitors, and
                    organizers. From answering FAQs to guiding users through event schedules, booth locations, or
                    registration,
                    the chatbot ensures instant, round-the-clock support.<br><br>
                    Custom-built for your event, it integrates with your website, app, or kiosks, offering multilingual
                    support
                    and personalized responses. This helps reduce manual inquiries, streamline communication, and
                    improve user
                    satisfaction across the board.<br><br>Whether you're hosting a corporate conference, trade show, or
                    exhibition, the AI chatbot enhances engagement,
                    improves information flow, and offers insights through user interaction analytics — making your
                    event
                    smarter and more efficient.
                </p>
            </div>
        </div>

    </section>



    <section class="cta">
        <img src="images/vision.jpg" alt="Vision" />
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
