<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UKM Kerajinan Mebel Dari Kayu Jati</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="\assets/img/favicon.png" rel="icon">
  <link href="\assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="\assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="\assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="\assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="\assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="\assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="\assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">suparmanagus418@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span></span>08572873172</i>
      </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Suparman Mebel</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php if (url_is('/')) {
                                            echo "";
                                          } else {
                                            echo "collapsed";
                                          }
                                          ?>" href="<?= base_url('/') ?>">Home</a></li>
          <li><a class="nav-link scrollto <?php if (url_is('/about')) {
                                            echo "";
                                          } else {
                                            echo "collapsed";
                                          }
                                          ?>" href="<?= base_url('/about') ?>">About</a></li>
          <li><a class="nav-link scrollto <?php if (url_is('/petunjuk')) {
                                            echo "";
                                          } else {
                                            echo "collapsed";
                                          }
                                          ?>" href="<?= base_url('/petunjuk') ?>">Petunjuk</a></li>
          <li><a class="nav-link scrollto <?php if (url_is('/produk')) {
                                            echo "";
                                          } else {
                                            echo "collapsed";
                                          }
                                          ?>" href="<?= base_url('/produk') ?>">Produk</a></li>
          <li><a class="nav-link scrollto <?php if (url_is('/estimasi')) {
                                            echo "";
                                          } else {
                                            echo "collapsed";
                                          }
                                          ?>" href="<?= base_url('/estimasi') ?>">Estimasi</a></li>
          <li><a class="nav-link scrollto <?php if (url_is('/pengembang')) {
                                            echo "";
                                          } else {
                                            echo "collapsed";
                                          }
                                          ?>" href="<?= base_url('/pengembang') ?>">Pengembang</a></li>
          <li><a class="nav-link scrollto <?php if (url_is('/contact')) {
                                            echo "";
                                          } else {
                                            echo "collapsed";
                                          }
                                          ?>" href="<?= base_url('/contact') ?>">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main" class='main'>
    <?php $this->renderSection('containt') ?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <h2>Welcome to <span>Suparman Mebel</span></h2>
          <p>Gudangnya mebel berkualitas</p>
            <img src="assets/img/maps.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100" style="width: 80%; height: auto;">

            <br></br>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="home">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="petunjuk">Petunjuk</a></li>
            <li><a href="produk">Produk</a></li>
            <li><a href="estimasi">Estimasi</a></li>
            <li><a href="pengembang">Pengembang</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Menerima Jasa </h4>
          <h4>Pembuatan</h4>
          <ul>
            <li><a href="produk">Lemari</a></li>
            <li><a href="produk">Kursi</a></li>
            <li><a href="produk">Meja</a></li>
            <li><a href="produk">Open Request</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Desa Soka <br>
            Seloharjo <br>
            Pundong <br>
            Bantul <br><br>
            <strong>Phone:</strong> +62 572 873 172<br>
            <strong>Email:</strong> suparmanagus418@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="\assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="\assets/vendor/aos/aos.js"></script>
  <script src="\assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="\assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="\assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="\assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="\assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="\assets/js/main.js"></script>

</body>

</html>