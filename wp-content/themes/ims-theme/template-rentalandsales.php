<?php
/*
Template Name: Rental And Sales Page
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rentalAndSales.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
</head>


<body>

    <?php get_header(); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="Rental & Sales Banner" class="hero-image">
        <div class="hero-overlay">
            <h1>Rental & Sales</h1>
        </div>
    </section>
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">About</span>
    </div>
    <hr />

    <section class="rental-sales">

        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Reliable Solutions</span><br>
                    for Every Occasion
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    Our Rental & Sales line offers high-quality event essentials to ensure smooth operations and
                    seamless brand experiences. From elegant event furniture to cutting-edge audiovisuals,
                    creative display rentals, and atmospheric lighting and sound, IMS delivers fully serviced,
                    ready-to-use solutions across Dubai and the UAE.<br><br>
                    Whether you’re organizing a professional conference, private celebration, or brand
                    activation, our expertly maintained equipment is tailored for every venue, theme, and
                    timeline—ensuring your event looks flawless and runs effortlessly.
                </p>
            </div>
        </div>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Rental & Sales</span>
    </div>
    <hr />
    <section class="rental-solutions">
        <article id="event-furniture">
            <img src="<?php echo get_template_directory_uri(); ?>/images/event-furniture.jpg" alt="Event Furniture" />
            <div>
                <h3>Event Furniture</h3>
                <p>
                    Our event furniture collection offers a wide range of elegant and practical solutions—from
                    stage seating to lounge areas, dining tables, podiums, and registration counters. We provide
                    stylish setups that suit your theme, elevate the guest experience, and enhance overall flow.
                </p>
            </div>
        </article>

        <article id="av" class="av-section">
            <img src="<?php echo get_template_directory_uri(); ?>/images/av.jpg" alt="AV Setup" />
            <div>
                <h3>AV</h3>
                <p>
                    Our AV solutions deliver cutting-edge audio and visual systems that elevate every
                    interaction. From crisp sound systems and dynamic lighting to high-definition LED displays
                    and live streaming setups, we provide full AV support tailored to your event’s scale,
                    purpose, and venue.
                </p>
            </div>
        </article>

        <article id="light-sound" class="light-sound">
            <img src="<?php echo get_template_directory_uri(); ?>/images/loght-and-sound.jpg" alt="Light and Sound" />
            <div>
                <h3>Light And Sound</h3>
                <p>
                    We offer immersive, atmospheric, and professional-grade light and sound solutions to
                    amplify your event’s energy and impact. From programmable lighting shows to crystal-clear
                    PA systems and ambient effects, our team manages every detail for a powerful sensory
                    experience.
                </p>
            </div>
        </article>

        <article id="branding-display" class="branding-display">
            <img src="<?php echo get_template_directory_uri(); ?>/images/branding-display.jpg" alt="Branding / Display Rentals" />
            <div>
                <h3>Branding / Display Rentals</h3>
                <p>
                    We provide a wide selection of branding structures and display rentals—from portable
                    backdrops to promotional kiosks, exhibition counters, and digital signage. Each solution is
                    designed for rapid setup and visual consistency, helping your brand stand out and adapt to
                    any venue or layout.
                </p>
            </div>
        </article>
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