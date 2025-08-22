<?php
/*
Template Name: About Us Page
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IMS Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
</head>


<body>

    <?php get_header(); ?>

    <section class="hero-section">
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="About Us Banner" class="hero-image">
        <div class="hero-overlay">
            <h1>About Us</h1>
        </div>
    </section>

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Blog</span>
    </div>
    <hr />
    <!-- Company Info Section -->
    <section class="about-company">
        <div class="about-header-content">
            <div class="about-left">
                <h2><span>Empowering Experiences<br></span> with Precision & Passion</h2>
            </div>
            <div class="about-right">
                <p class="about-description">
                    It all began in 2008, when IMS UAE set out with a simple yet powerful mission—to
                    transform ordinary events into unforgettable experiences. What started as a passion-driven
                    journey quickly evolved into a legacy of excellence. Today, we’re proud to be recognized
                    among the , Abu Dhabi, Saudi Arabia, and beyond, trusted by brands that believe in making
                    every moment count. At Intelligence Marketing Solutions, we don’t just manage events—we
                    tell your story. We listen, understand, and dive deep into your vision, crafting events,
                    exhibitions, and activations that connect with audiences and leave lasting impressions.
                    From bustling trade shows to elegant galas, every project is fueled by creativity, precision,
                    and a relentless drive for results. <br><br>
                    As one of the go-to agencies offering total , we bridge ideas with execution—offering end-toend services that deliver value at every stage. Whether you're looking for a marketing
                    agency near Single Business Tower, a near Al Moosa Tower, or an , IMS is ready to bring
                    your vision to life with excellence. Because for us, it's not just about events. It's about
                    impact. It's about connection. And it's about making your brand unforgettable.
                </p>

                <div class="stats">
                    <div class="stat-item">
                        <h3>211K+</h3>
                        <p>Satisfied Clients</p>
                    </div>
                    <div class="stat-item">
                        <h3>12Y+</h3>
                        <p>Years of Experience</p>
                    </div>
                    <div class="stat-item">
                        <h3>500</h3>
                        <p>Projects Completed</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mission-vision">
            <div class="mv-box">
                <h4>Our Mission</h4>
                <p>
                    To deliver end-to-end event, exhibition, and branding solutions that are thoughtfully
                    tailored, creatively inspired, and flawlessly executed—helping our clients turn ideas into
                    unforgettable experiences.
                </p>
            </div>
            <div class="mv-box">
                <h4>Our Vision</h4>
                <p>
                    To be the leading creative partner in the UAE and beyond, known for our local expertise,
                    global standards, and trusted network—setting new benchmarks in event management
                    through innovation, collaboration, and impact.
                </p>
            </div>
        </div>
    </section>
    <!-- Team Member -->
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Our Team</span>
    </div>
    <hr />

    <section class="team-member">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/nabeel.png" alt="Nabeel Ghaith">
            <div class="text">
                <h3>Nabeel Ghaith</h3>
                <p>
                    Nabeel Ghaith is the CEO and Founder of IMS. He leveraged his expertise and attraction towards the Events and Exhibition industry to create a successful company that focuses and excels in what it does.
                    <br><br>
                    Prior to founding IMS, he worked with one of the leading Telecom companies in the region for over 15 years. Nabeel was responsible for the corporate brand, corporate communications and integrated marketing efforts regionally. He manage the organization’s corporate positioning, branding and identity, marketing campaigns, public relations, social media, and field marketing programs to ensure strong connections with customers. He worked on numerous projects to establish companies in Saudi Arabia, Egypt, Nigeria and India.
                </p>
            </div>
        </div>
    </section>

    <!-- Experiences Carousel -->
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Our Team</span>
    </div>
    <hr />

    <section class="experiences">
        <div class="container">
            <div class="experience-heading">
                <h2><span class="highlight">Crafted Experiences,</span><br>Lasting Impact</h2>
                <p>
                    We craft immersive event and exhibition experiences with precision and creativity—helping brands
                    connect, engage, and leave a lasting impact through every stage of execution.
                </p>
            </div>

            <div class="carousel">
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Event 1" />
                    <h4>Meeting Speakers</h4>
                    <p>To become a leading force in the events and exhibition.</p>
                    <span class="event-date">13 Apr 2020</span>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/officers.png" alt="Event 2" />
                    <h4>Meeting Speakers</h4>
                    <p>To become a leading force in the events and exhibition.</p>
                    <span class="event-date">13 Apr 2020</span>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/event2.png" alt="Event 3" />
                    <h4>Meeting Speakers</h4>
                    <p>To become a leading force in the events and exhibition.</p>
                    <span class="event-date">13 Apr 2020</span>
                </div>
            </div>

            <div class="timeline-nav">
                <span class="arrow">&larr;</span>
                <span class="dot"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="arrow">&rarr;</span>
            </div>
        </div>
    </section>


    <!-- Footer include -->
    <?php get_footer(); ?>
    <!-- JS loader -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/include.js"></script>

</body>

</html>