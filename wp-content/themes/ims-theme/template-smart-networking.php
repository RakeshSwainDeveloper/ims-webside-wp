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
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="smart network and matchmaking" class="hero-image">
        <div class="hero-overlay">
            <h1>Smart Networking & Matchmaking</h1>
        </div>
    </section>
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Smart networking & Matchmaking</span>
    </div>
    <hr />
    <!-- Content Section -->
    <section class="service-content">

        <div class="intro">
            <div class="intro-title">
                <h2>
                    <span class="highlight">Smarter Connections through</span><br>
                    Matchmaking & Networking
                </h2>
            </div>
            <div class="intro-description">
                <p>
                    At IMS, we understand that genuine business growth stems from meaningful connections.
                    Our Smart Matchmaking & Networking service is designed to go beyond conventional
                    introductions by connecting individuals and businesses with purpose. Whether you're
                    attending an event or exploring new partnerships, our platform ensures that every
                    interaction is aligned with your professional objectives.<br><br>
                    Using a combination of advanced technology and human insight, we tailor each networking
                    experience to match your interests and goals. By analyzing key data points, we facilitate
                    connections that are not just relevant but also valuable, helping you engage with the right
                    people at the right time. This strategic approach increases the efficiency of your networking
                    efforts and maximizes outcomes.<br><br>From building new business relationships to uncovering collaborative opportunities, IMS
                    makes networking smarter, more intuitive, and result-driven. Our goal is to empower
                    professionals and organizations to grow their networks meaningfully—creating
                    conversations that lead to long-term success.
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