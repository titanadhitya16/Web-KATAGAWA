<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Karang Taruna RW-011</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: AgriCulture
  * Template URL: https://github.com/mrupyagunggagriculture-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://github.com/mrupyagungglicense/
  ======================================================== -->
</head>

<style>
  /* Style the previous and next carousel buttons */
.carousel-control-prev-icon, .carousel-control-next-icon {
  background-color: #000; /* Set a dark background color */
  border-radius: 50%; /* Make the icon background round */
  width: 40px;
  height: 40px;
}


/* Make the buttons more visible */
.carousel-control-prev, .carousel-control-next {
  z-index: 1; /* Ensure they are on top of the images */
}

/* Optional: Add custom arrows */
.carousel-control-prev-icon::after {
  font-size: 1.5rem;
  color: #fff;
}

.carousel-control-next-icon::after {
  font-size: 1.5rem;
  color: #fff;
}

  /* Make the header sticky on top */
  #header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    /* Ensure it stays on top of other content */
    background-color: white;
    /* Optional: change to any background color */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    /* Optional: add some shadow for better visibility */
  }

  /* Add padding to the body or main content to prevent it from being covered by the fixed header */
  body {
    padding-top: 80px;
    /* Adjust based on the height of your header */
  }

  /* Styling improvements */
  .service-item {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  .service-heading {
    font-size: 1.25rem;
    font-weight: bold;
    color: #333;
  }

  section#services {
    background-color: #f8f9fa;
  }

  .service-item-icon {
    background-color: #024106;
    padding: 20px;
    border-radius: 50%;
    color: #fff;
    margin-bottom: 20px;
    display: inline-block;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  @media (max-width: 767px) {
    .service-heading {
      font-size: 1.1rem;
    }
  }
</style>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center position-fixed top-0 w-100">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/karang taruna2.png" alt="Kartarlogo" class="img-fluid w-30">KARANG TARUNA RW-011
        <!-- <h1 class="sitename">AgriCulture</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="services.html">Our Team</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>