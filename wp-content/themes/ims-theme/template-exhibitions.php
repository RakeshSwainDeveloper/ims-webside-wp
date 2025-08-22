<?php
/*
Template Name: Exhibitions Page
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
    <!-- Hero Banner -->
    <section class="hero-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="Exhibitions Banner" class="hero-image" />
        <h1 class="hero-text">Exhibitions</h1>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Exhibitions</span>
    </div>
    <hr />

    <section class="intro-section">
        <div class="left">
            <h2><span class="red-text">Showcase Your Brand with</span><br>Impactful Exhibitions</h2>
        </div>
        <div class="right">
            <p>
                Our exhibition solutions are designed to position your brand in front of the right audience
                through engaging, immersive environments. Whether you’re launching a new product,
                building awareness, or networking with industry leaders, we offer end-to-end exhibition
                support—from booth design to staffing—so you stand out, stay relevant, and make every
                moment count.
            </p>
        </div>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Exhibition solutions</span>
    </div>
    <hr />

    <section class="event-management-section">
        <div id="exhibition-stands" class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/exhibition-stand.png" alt="Event Management">
            </div>
            <div class="content">
                <h3>Exhibition Stands</h3>
                <p>
                    Exhibition stands are designed and built to reflect your brand with precision and creativity.
                    Using cutting-edge design and strategic messaging, we create immersive spaces that
                    capture attention, communicate your value, and convert visitors into business connections.
                </p>
            </div>
        </div>

        <!-- Corporate Events -->
        <div id="exhibition-event" class="event-block reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Corporate Events" />
            </div>
            <div class="content">
                <h3>Exhibition Event Services</h3>
                <p>
                    We handle every aspect of your exhibition participation—logistics, setup, compliance,
                    scheduling, and dismantling—delivering a smooth and stress-free experience. Our expert
                    support ensures your team can focus on audience engagement while we manage the
                    behind-the-scenes execution flawlessly.
                </p>
            </div>
        </div>
        <div id="art-galleries" class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/exhibition-art.png" alt="Event Management">
            </div>
            <div class="content">
                <h3>Art Galleries & Shows</h3>
                <p>
                    Whether hosting a solo artist exhibit or a multi-brand showcase, we design and manage
                    elegant art galleries and shows that capture attention, evoke emotion, and drive
                    engagement with your creative work.
                </p>
            </div>
        </div>

        <!-- Corporate Events -->
        <div id="shell-scheme" class="event-block reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Corporate Events" />
            </div>
            <div class="content">
                <h3>Shell Scheme</h3>
                <p>
                    Our shell scheme booths are designed for efficiency, affordability, and versatility—ideal for
                    multi-vendor exhibitions or events with standardized setups. We ensure each stand reflects
                    your brand identity with clarity.
                </p>
            </div>
        </div>
        <div id="custom-stands" class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Event Management">
            </div>
            <div class="content">
                <h3>Custom Stands</h3>
                <p>
                    We specialize in designing and building bespoke exhibition stands that align with your
                    brand objectives, maximize floor space, and leave a strong visual impact—whether for trade
                    shows, expos, or product launches.
                </p>
            </div>
        </div>

        <!-- Corporate Events -->
        <div id="event-staffing" class="event-block reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/exhibition-staff.png" alt="Corporate Events" />
            </div>
            <div class="content">
                <h3>Event Staffing</h3>
                <p>
                    Experienced event staff—including hostesses, promoters, technicians, and brand
                    ambassadors—provide seamless on-site support and represent your brand with
                    professionalism. We ensure every exhibition or activation runs smoothly while maintaining
                    a consistent, polished brand image throughout the experience.
                </p>
            </div>
        </div>
    </section>
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Latest Events</span>
    </div>
    <hr />

    <section class="latest-events">
        <div class="left">
            <h2><span class="red-text">Seamless Events,</span><br />Exceptional Experiences</h2>
        </div>
        <div class="right">
            <p>
                From strategy to execution, we craft immersive event experiences that align with your goals. Our team
                ensures every detail is handled with precision, leaving a lasting impression on your audience.
            </p>
        </div>
    </section>
    <div class="event-gallery">
        <!-- Top-Left Large Image -->
        <div class="gallery-item large top-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/manstepping.png" alt="TechX 2024" />
            <div class="overlay">
                <p>TechX 2024 – Product Launch Pavilion</p>
                <span class="icon-arrow">➜</span>
            </div>
        </div>

        <!-- Small Images -->
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/flower.png" alt="Event" /></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/rooftop.png" alt="Event" /></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/crowded-complex.png" alt="Event" /></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/corridor.png" alt="Event" /></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/exhibition.jpg" alt="Event" /></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Event" /></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/rooftop.png" alt="Event" /></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/officers.png" alt="Event" /></div>

        <!-- Bottom-Right Large Image -->
        <div class="gallery-item large bottom-right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/manstepping.png" alt="TechX 2024 Again" />
        </div>
    </div>

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