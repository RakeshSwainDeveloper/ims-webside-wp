<?php
/*
Template Name: Registration & Ticketing Software Page
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
            <h1>Registration & Ticketing Software</h1>
        </div>
    </section>
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Registration & Ticketing Software</span>
    </div>
    <hr />
    <!-- Content Section -->
    <section class="service-content">

        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Streamlined</span><br>
                    Registration & Ticketing
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    Our Registration & Ticketing Software simplifies guest check-ins and digital ticket sales with ease
                    and efficiency. Designed for modern events, this solution allows attendees to register quickly
                    online or at the venue with digital passes. Event organizers gain real-time access to attendee data,
                    enhancing planning and execution.
                    <br><br>
                    With seamless ticketing integration, you can manage early-bird pricing, group bookings, and VIP
                    access, all
                    in one platform. The software ensures secure payments and generates instant e-tickets, reducing
                    manual
                    efforts and improving the guest experience.<br><br>Whether it's a corporate event, exhibition, or
                    concert, our digital registration and ticketing tools are
                    built to scale. Offer a smooth, professional entry process that leaves a lasting first impression.
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