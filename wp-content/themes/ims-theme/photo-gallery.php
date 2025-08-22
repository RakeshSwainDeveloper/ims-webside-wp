<?php
/*
Template Name: Photo Gallery
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="photo gallery" class="hero-image">
        <h1 class="hero-text">Photo Gallery</h1>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Gallery</span>
    </div>
    <hr />

    <section class="intro-section">
        <div class="left">
            <h2><span class="red-text">Seamless Events,</span><br>Exceptional Experiences</h2>
        </div>
        <div class="right">
            <p>
                Our Photo Gallery & Cloud Sharing service offers a seamless way to collect, store, and share your
                event’s most memorable moments. Whether it's a corporate event, exhibition, or private celebration, we
                ensure every captured moment is easily accessible to your guests.
            </p>
        </div>
    </section>


    <div class="event-gallery">
        <!-- Top-left LARGE image (2x2) -->
        <div class="gallery-item large top-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/manstepping.png" alt="Large 1">
            <div class="overlay">
                <p>TechX 2024 – Product Launch Pavilion</p>
                <span class="icon-arrow">➜</span>
            </div>
        </div>

        <!-- Small images -->
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/flower.png" alt="img2"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/rooftop.png" alt="img3"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/crowded-complex.png" alt="img4"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/corridor.png" alt="img5"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/exhibition.jpg" alt="img6"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="img7"></div>

        <!-- Bottom-right LARGE image (2x2) -->
        <div class="gallery-item large bottom-right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/manstepping.png" alt="Large 2">
        </div>

        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/rooftop.png" alt="img8"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/officers.png" alt="img9"></div>
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