<?php
/*
Template Name: Blog Main Page
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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blogmain.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
</head>


<body>

  <?php get_header(); ?>

   <!-- Hero Section -->
    <section class="hero-section">
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="About Us Banner" class="hero-image">
        <div class="hero-overlay">
            <h1>Blog</h1>
        </div>
    </section>
    <!-- Blog Section -->
    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Blog</span>
    </div>
    <hr />

    <section class="blog-section">
        <div class="blog-header">
            <div class="blog-title">
                <h2><span>Shaping Memorable</span><br>Experiences</h2>
            </div>
            <div class="blog-description">
                <p>
                    Stay ahead in the events and exhibition industry with expert tips, creative ideas, and
                    proven strategies to elevate every brand experience.
                </p>
            </div>
        </div>

        <div class="blog-cards">
            <!-- Blog Card 1 -->
            <div class="blog-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event1.jpg" alt="Event Room" />
                <h3>How to Make Your Event More Engaging and Memorable</h3>
                <a href="/blog" class="read-more">Read More <span>↗</span></a>
            </div>

            <!-- Blog Card 2 -->
            <div class="blog-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-5.jpg" alt="Trade Show" />
                <h3>Simple Ways to Get Better Results from Trade Shows</h3>
                <a href="/blog" class="read-more">Read More <span>↗</span></a>
            </div>

            <!-- Blog Card 3 -->
            <div class="blog-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-3.jpg" alt="Booth Design" />
                <h3>Top Booth Design Ideas to Attract More Visitors in 2025</h3>
                <a href="/blog" class="read-more">Read More <span>↗</span></a>
            </div>
        </div>
    </section>



  <!-- Footer include -->
  <?php get_footer(); ?>
  <!-- JS loader -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/include.js"></script>

</body>

</html>
