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
        <!-- <div class="section-heading">
            <div class="label-container">
                <span class="dot"></span>
                <span class="label">Rental & Sales</span>
            </div>
            <hr />
        </div> -->


        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Reliable Solution</span><br>
                    or Every Occasion
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    Our Rental & Sales service offers high-quality event essentials to ensure smooth execution and
                    professional presentation. From lighting and sound systems to staging, seating, and décor, we
                    provide equipment that meets both technical and aesthetic demands.<br><br>
                    Whether you're organizing a corporate event, exhibition, or private celebration, our rental
                    inventory covers everything you need. We also offer sales for those looking to own reliable event
                    equipment, tailored to your long-term needs.
                </p>
            </div>
        </div>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Rental & Sales</span>
    </div>
    <hr />

    <!-- <section class="rental-sales">
        <div class="section-heading">
            <div class="label-container">
                <span class="dot"></span>
                <span class="label">Rental & Sales</span>
            </div>
            <hr />
        </div>
    </section> -->
    <section class="rental-solutions">
        <!-- <div class="section-heading">
            <div class="label-container">
                <span class="dot"></span>
                <span class="label">Rental and Sales Solution</span>
            </div>
            <hr />
        </div> -->
        <article id="event-furniture">
            <img src="<?php echo get_template_directory_uri(); ?>/images/event-furniture.jpg" alt="Event Furniture" />
            <div>
                <h3>Event Furniture</h3>
                <p>
                    Our Event Furniture service offers a wide range of elegant and practical pieces to suit any
                    event type. From sleek lounge setups and cocktail tables to staging seating and VIP
                    arrangements, we provide high-quality furniture that enhances comfort and style while aligning
                    with your event's theme and ambiance.
                </p>
            </div>
        </article>

        <article id="av" class="av-section">
            <img src="<?php echo get_template_directory_uri(); ?>/images/av.jpg" alt="AV Setup" />
            <div>
                <h3>AV</h3>
                <p>
                    Our AV service delivers cutting-edge audio-visual setups that elevate every event experience.
                    From clear sound systems and dynamic lighting to high-resolution LED walls and projectors, we
                    ensure seamless integration and flawless execution to captivate your audience and enhance your
                    brand presence.
                </p>
            </div>
        </article>

        <article id="light-sound" class="light-sound">
            <img src="<?php echo get_template_directory_uri(); ?>/images/loght-and-sound.jpg" alt="Light and Sound" />
            <div>
                <h3>Light And Sound</h3>
                <p>
                    Enhance your event ambiance with our professional light and sound services. We provide dynamic
                    lighting setups and crystal-clear audio systems tailored to your event type and venue. From
                    stage shows to corporate functions, we create engaging environments that leave a lasting
                    impression.
                </p>
            </div>
        </article>

        <article id="branding-display" class="branding-display">
            <img src="<?php echo get_template_directory_uri(); ?>/images/branding-display.jpg" alt="Branding / Display Rentals" />
            <div>
                <h3>Branding / Display Rentals</h3>
                <p>
                    Boost your brand presence with our prominent branding and display rentals. We offer a wide range
                    of customizable display stands, banners, and branded elements to showcase your identity at any
                    event. Perfect for exhibitions, conferences, and activations, our solutions ensure maximum
                    visibility and professional appeal.
                </p>
            </div>
        </article>
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