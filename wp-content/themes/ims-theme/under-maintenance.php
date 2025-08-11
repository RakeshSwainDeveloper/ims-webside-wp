<?php
/*
Template Name: Under Maintenance
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Under Maintenance</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    .maintenance-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      padding: 2rem;
    }

    h1 {
      font-size: 3rem;
      color: #333;
    }

    p {
      font-size: 1.25rem;
      color: #555;
      max-width: 600px;
    }

    .logo {
      max-width: 180px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <?php get_header(); ?>

  <div class="maintenance-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo">
    <h1>We’ll Be Back Soon</h1>
    <p>Our website is currently undergoing scheduled maintenance. We appreciate your patience and apologize for any inconvenience.</p>
  </div>

  <?php get_footer(); ?>

</body>

</html>
