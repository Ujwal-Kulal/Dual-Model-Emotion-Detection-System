<?php
session_start();
error_reporting(0);
include('dbconnection.php');  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dual Model</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="assets/img/logo01.gif" alt="">
            <h1 class="sitename">AI as Your Psychotherapist</h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <!-- <li><a href="#contact">Contact</a></li> -->
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="login.php">Login</a>

         <a class="cta-btn d-none d-sm-block" href="register.php">Register</a>


      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>FIGHT WITH AI</h2>
          <p>Final Stop For Early Disease Symptoms Prediction & Health Improvement</p>
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Why Choose Fight with AI?</h3>
              <p>
                <b>AI in mental health</b> care offer early detection of <strong>conditions</strong>, <strong>personalized treatment</strong>, 
                improved patient engagement, and greater accessibility, particularly for underserved areas. While it 
                holds the potential to transform <b>care</b>, <b>ethical</b> and <b>privacy</b> concerns must be addressed to 
                ensure progress is balanced with human interaction and compassion.
              </p>
              <div class="text-center">
                <!-- <a href="#about" class="more-btn"><span>Checkout here more..!</span> <i class="bi bi-chevron-right"></i></a> -->
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Mental assesment</h4>
                    <p>With our <b>"Analysis"</b> feature, user can get their mental health condition</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-gem"></i>
                    <h4>Daily Report</h4>
                    <p>A report regarding mental health is provided to user.</p>
                  </div>
                </div><!-- End Icon Box -->

                <!-- <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-inboxes"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div> -->

              </div>
            </div>
          </div>
        </div><!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/about01.webp" class="img-fluid" alt="">
            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> -->
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Tips to impprove mental health</h3>
            <p>The <strong>4-T approach</strong> offers <strong>simple, everyday actions</strong> to support your mental wellbeing. By Talking openly, Taking a Break, Tuning In, and Taking Care, you can build healthy habits that strengthen both mind and body.            </p>
            <ul>
              <li>
                <i class="fa-solid fa-comments"></i>
                <div>
                  <h5><strong>Talk</strong></h5>
                  <p>Speak openly with someone you trust about how you're feeling—it helps lighten your emotional load.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-mug-saucer"></i>
                <div>
                  <h5><strong>Take a Break</strong></h5>
                  <p>Pause when you need to you can take a walk or breathe deeply, or do some work to reset your mind.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-brain"></i>
                <div>
                  <h5><strong>Tune In</strong></h5>
                  <p>Notice your thoughts and feelings without judgment, this self-awareness helps you respond with greater calm</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-heart"></i>
                <div>
                  <h5><strong>Take Care</strong></h5>
                  <p>Do one small act of self-care each day, either that's by taking rest, movement, or something you enjoy, to support your wellbeing.</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <div class="container copyright text-center mt-4">
      <p>©<span>Copyright</span> <strong class="px-1 sitename">draft-name</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>