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
                    At IMS, our Registration & Ticketing Software is designed to make guest check-ins and
                    digital ticket sales simple, efficient, and seamless. Built for modern events, this solution
                    empowers attendees to register quickly and securely through intuitive digital passes. Event
                    organizers gain instant access to attendee data, which supports smoother planning and
                    flawless on-site execution.
                    <br><br>
                    By integrating ticketing with seating, group bookings, and VIP access, our platform provides
                    a complete solution in one place. It also manages secure payments and guarantees real-time
                    updates, reducing manual tasks and enhancing the overall guest experience. This
                    comprehensive approach helps eliminate inefficiencies while keeping the focus on
                    delivering a great event.<br><br>From corporate conferences to exhibitions and concerts, IMS offers scalable, reliable
                    registration and ticketing tools that leave a professional first impression. Our streamlined
                    system ensures a smooth entry process, setting the tone for an organized and memorable
                    event from the very first interaction.
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