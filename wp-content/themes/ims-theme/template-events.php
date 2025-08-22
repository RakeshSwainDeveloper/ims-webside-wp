<?php
/*
Template Name: Events Page
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="Events Banner" class="hero-image" />
        <h1 class="hero-text">Events</h1>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Events</span>
    </div>
    <hr />

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="left">
            <h2><span class="red-text">Unforgettable Events</span><br>Tailored to Inspire</h2>
        </div>
        <div class="right">
            <p>
                At IMS, we craft experiences that go above and beyond expectations. From corporate galas
                to private celebrations and large-scale activations, we deliver creative, flawlessly executed
                events that inspire, engage, and leave lasting impressions. Our full-service event solutions
                combine strategic planning, design innovation, and technical expertise to bring every vision
                to life—seamlessly and memorably
            </p>
        </div>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Event management solutions</span>
    </div>
    <hr />

    <!-- Event Management Section -->
    <section class="event-management-section">
        <div id="event-management" class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-management.png" alt="Event Management">
            </div>
            <div class="content">
                <h3>Event Management</h3>
                <p>
                    Our expert event managers handle every detail from concept to completion—venue
                    sourcing, logistics, staffing, compliance, and contingency planning—ensuring every event
                    runs smoothly and meets your business or brand goals
                </p>
            </div>
        </div>

        <!-- Corporate Events -->
        <div id="corporate-events" class="event-block reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-corpo.png" alt="Corporate Events" />
            </div>
            <div class="content">
                <h3>Corporate Events</h3>
                <p>
                    Whether it’s a product launch, annual conference, or employee appreciation event, our
                    corporate event services are crafted to showcase your brand’s identity, engage your
                    audience, and deliver a professional experience with strategic precision and creative
                    execution.
                </p>
            </div>
        </div>

        <!-- Private Events -->
        <div id="private-events" class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-private.png" alt="Private Events" />
            </div>
            <div class="content">
                <h3>Private Events</h3>
                <p>
                    We curate unforgettable private events that celebrate life’s most cherished moments—
                    whether it’s a milestone birthday, an intimate gathering, or a themed celebration. With
                    bespoke concepts, elegant décor, and seamless coordination, thoughtfully tailored to reflect
                    your personality, style, and story
                </p>
            </div>
        </div>

        <!-- Sports Events -->
        <div id="sports-events" class="event-block reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-sports.png" alt="Sports Events" />
            </div>
            <div class="content">
                <h3>Sports Events</h3>
                <p>
                    We deliver high-impact sports events that engage and energize audiences—ranging from
                    tournaments and fan zones to athlete meet-and-greets. Our team handles everything from
                    permits and crowd control to branding and vendor management, ensuring a seamless,
                    exciting experience from planning to execution.
                </p>
            </div>
        </div>

        <div id="wedding-production" class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-wedding.png" alt="Wedding Production" />
            </div>
            <div class="content">
                <h3>Wedding Production</h3>
                <p>
                    Our wedding production service brings your dream celebration to life with elegance and precision.
                    From venue décor, lighting, and stage design to sound, entertainment, and guest management, we
                    handle every detail. We create magical, memorable experiences tailored to each couple’s unique
                    style, ensuring a flawless and stress-free wedding event.
                </p>
            </div>
        </div>
        <!-- Theming and Decor -->
        <div id="theming-decor" class="event-block reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-theming.png" alt="Theming and Decor">
            </div>
            <div class="content">
                <h3>Theming and Decor</h3>
                <p>
                    Immersive themes and custom décor bring your event vision to life. Our in-house design
                    team crafts cohesive visual narratives that align with your brand, story, or celebration—
                    enhancing atmosphere, engagement, and the overall impact of your event.
                </p>
            </div>
        </div>

        <!-- Mall Activations -->
        <div id="mall-activations" class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-mall.png" alt="Mall Activations">
            </div>
            <div class="content">
                <h3>Mall Activations</h3>
                <p>
                    We create interactive mall activations that attract, engage, and convert shoppers. From popups and seasonal displays to influencer-driven events, our experiences are designed to
                    boost footfall, enhance brand visibility, and deliver measurable results in high-traffic retail
                    environments.
                </p>
            </div>
        </div>

        <!-- Light and Sound -->
        <div id="light-sound" class="event-block reverse">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-light.png" alt="Light And Sound">
            </div>
            <div class="content">
                <h3>Light And Sound</h3>
                <p>
                    Expert technicians provide crystal-clear audio and intelligent lighting that elevate the mood,
                    pace, and energy of any event. From intimate gatherings to large stadium productions, we
                    create immersive atmospheres that leave lasting impressions on every guest.
                </p>
            </div>
        </div>

        <!-- AV -->
        <div class="event-block">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-av.png" alt="AV">
            </div>
            <div class="content">
                <h3>AV (Audio Visual)</h3>
                <p>
                    Cutting-edge AV technology powers every aspect of your event—LED walls, projection
                    mapping, live streaming, and hybrid solutions. We ensure flawless content delivery and
                    immersive audience engagement with seamless integration, technical precision, and
                    support tailored to your venue and goals.
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