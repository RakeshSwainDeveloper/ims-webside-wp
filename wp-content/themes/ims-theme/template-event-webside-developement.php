<?php
/*
Template Name: Event Webside Developement Page
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IMS Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
            <h1>Event Webside Developement</h1>
        </div>
    </section>


    <!-- Content Section -->

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Event website Developement</span>
    </div>
    <hr />

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="left">
            <h2><span class="red-text">Powerful Event Websites</span><br>That Elevate Your Brand</h2>
        </div>
        <div class="right">
            <p>
                In today’s digital-first world, a well-designed event website is essential for creating impact,
                generating excitement, and driving registrations. At IMS, we specialize in building custom
                websites that focus on performance and user experience while aligning perfectly with your
                event goals. From corporate gatherings and exhibitions to conferences and brand
                activations, we develop responsive platforms that reflect your brand and drive engagement
                at every stage of the attendee journey.
                <br><br>
                Our approach blends intuitive design with strategic layout and functionality to ensure your
                website not only looks great but also performs seamlessly. We integrate everything from
                registration systems, payment gateways, and check-ins to real-time updates and analytics.
                Optimized for fast load times and SEO, our websites are built to enhance visibility while
                offering a smooth and accessible experience across devices.
                <br><br>
                Whether you're hosting a one-time event or managing a recurring series, IMS delivers event
                websites that are scalable, secure, and easy to navigate. Our expert team works closely with
                you from concept to launch, creating platforms that support your goals, simplify event
                promotion, and help your brand stand out in a crowded digital space.
            </p>
        </div>
    </section>


    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Additional Features</span>
    </div>
    <hr />
    <section class="features-section">

        <div class="features-grid">
            <div class="feature-item">
                <div class="icon-circle">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="feature-text">
                    <h3>Online registration</h3>
                    <p>Seamless online registration for hassle-free event entry and tracking.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="icon-circle">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="feature-text">
                    <h3>Agenda</h3>
                    <p>Create, share, and manage event agendas with real-time updates easily.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="icon-circle">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="feature-text">
                    <h3>Speaker profiles</h3>
                    <p>Showcase detailed speaker profiles to highlight expertise and session info.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="icon-circle">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="feature-text">
                    <h3>Virtual event access</h3>
                    <p>Seamless access to virtual events from any device, anytime, anywhere.</p>
                </div>
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