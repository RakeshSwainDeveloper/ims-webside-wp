<?php
/*
Template Name: Branding Page
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/event.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
</head>


<body>

    <?php get_header(); ?>
    <section class="hero-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="Branding Banner" class="hero-image" />
        <h1 class="hero-text">Branding</h1>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Branding</span>
    </div>
    <hr />

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="left">
            <h2><span class="red-text">Branding Solutions That </span><br>Make Your Event Stand Out</h2>
        </div>
        <div class="right">
            <p>
                Our branding services are designed to help your event create a lasting impression. From
                exhibition signage to consumer activations, we align your brand message with powerful
                visuals, strategic placements, and personalized gifts.
                We specialize in event-focused branding solutions, including logo design, signage, booth
                visuals, merchandise, and digital assets tailored to live or virtual environments. Whether
                you’re promoting a corporate seminar or a large-scale exhibition, we ensure your brand
                speaks with purpose.
            </p>
        </div>
    </section>

    <section class="partners">
        <div class="partners-container">
            <div class="partners-logos">
                <img src="<?php echo get_template_directory_uri(); ?>/images/car-rental.jpg" alt="Car Rental" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/real-estate.jpg" alt="Real Estate" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/envato.jpg" alt="Envato" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/green-world.jpg" alt="Green World Technology" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/mountain.jpg" alt="Mountaintrip" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/law.jpg" alt="Law Bureau" />
            </div>
        </div>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Branding Solutions</span>
    </div>
    <hr />

    <!-- Event Management Section -->
    <section class="event-management-section">
        <div id="signage-bill" class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-signage.png" alt="Event Management">
            </div>
            <div class="content">
                <h3>Signage / Billboards</h3>
                <p>
                    We design and deliver high-visibility signage and billboard solutions that amplify your
                    brand presence at events and exhibitions. From directional signs and entry points to
                    promotional boards, our solutions use clean messaging, bold visuals, and strategic
                    placements to maximize visibility and engagement.
                </p>
            </div>
        </div>

        <!-- Corporate Events -->
        <div id="brand-activations" class="event-block reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Corporate Events" />
            </div>
            <div class="content">
                <h3>Brand Activations</h3>
                <p>
                    We create dynamic brand activation experiences that connect with your audience on a deeper
                    level. From live interactions to creative installations, our team ensures every activation
                    builds brand awareness, drives participation, and leaves a lasting impression, helping you turn
                    moments into measurable marketing impact.
                </p>
            </div>
        </div>

        <!-- Private Events -->
        <div id="roadshows" class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Private Events" />
            </div>
            <div class="content">
                <h3>Roadshows</h3>
                <p>
                    Our roadshow services are designed to bring your brand directly to your audience across
                    locations and venues. We manage every detail—from logistics and venue setup to local
                    engagement strategies—helping you reach new markets, generate leads, and create lasting
                    regional impact.
                </p>
            </div>
        </div>

        <!-- Sports Events -->
        <div id="corporate-gifts" class="event-block reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Sports Events" />
            </div>
            <div class="content">
                <h3>Corporate Gifts</h3>
                <p>
                    Our corporate gifting solutions help you build lasting relationships with clients, employees,
                    and stakeholders. From personalized merchandise to exclusive executive gifts, we source,
                    brand, and deliver items that express your brand identity while adding value to your
                    business relationships.
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