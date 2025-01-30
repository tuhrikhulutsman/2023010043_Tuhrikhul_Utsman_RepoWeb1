<?php include "header.php" ?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>toko pakaian</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="home.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">
          <img src="assets/img/logo.png" />
      </h1>
      
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="create.php">memesan</a>
      <a class="btn-getstarted" href="index.php">keluar</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Selamat Datang di toko<br>AVISYA</h1>
            <p data-aos="fade-up" data-aos-delay="100">Temukan berbagai koleksi baju yang terbaik dengan harga menarik</p>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/bajudewasa1.jpg" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>tentang kami<br></h2>
        <p><span>pelajari lebih lanjuut </span> <span class="description-title">tentang kami</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/toko.jpg" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3>admin</h3>
              <p>+62 852 2623 4626</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Temukan gaya yang sesuai untuk Anda. Nikmati koleksi pakaian terbaru dengan kenyamanan dan kualitas terbaik, dirancang untuk menemani setiap momen Anda.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>baju dewasa</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>baju remaja.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>baju anak.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>bebas order(memesan bayang yang kau inginkan).</span></li>
              </ul>
              <p>
                Kami menghadirkan pakaian yang dirancang dengan cermat untuk kenyamanan Anda. Setiap detail dipertimbangkan dengan hati-hati, memastikan kualitas terbaik tanpa kompromi. Temukan koleksi yang membuat Anda merasa istimewa setiap saat
              </p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p><span>Check Out</span> <span class="description-title"> Menu</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Seluruhnya</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Dewasa</h4>
            </a><!-- End tab nav item -->

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Remaja</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>anak anak</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>seluruhnya</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/bajudewasa1.jpg" class="glightbox"><img src="assets/img/bajudewasa1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>busana Muslim </h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.200.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa2.jpg" class="glightbox"><img src="assets/img/menu/dewasa2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslin</h4>
                <p class="ingredients">
                  XXL,XL,L,M
                </p>
                <p class="price">
                  Rp.200.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa3.jpg" class="glightbox"><img src="assets/img/menu/dewasa3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                 XXL,XL,L,M
                </p>
                <p class="price">
                  Rp.200.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa4.jpg" class="glightbox"><img src="assets/img/menu/dewasa4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                 XXL,XL,L,M
                </p>
                <p class="price">
                  Rp.200.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa5.jpg" class="glightbox"><img src="assets/img/menu/dewasa5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                 XXL,XL,L,M
                </p>
                <p class="price">
                  $200.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa6.jpg" class="glightbox"><img src="assets/img/menu/dewasa6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                 XXL,XL,L,M
                </p>
                <p class="price">
                  Rp.200.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja1.jpg" class="glightbox"><img src="assets/img/menu/remaja1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja </h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja2.jpg" class="glightbox"><img src="assets/img/menu/remaja2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja</h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja3.jpg" class="glightbox"><img src="assets/img/menu/remaja3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja</h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja4.jpg" class="glightbox"><img src="assets/img/menu/remaja4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja </h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja6.jpg" class="glightbox"><img src="assets/img/menu/remaja6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja </h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja7.jpg" class="glightbox"><img src="assets/img/menu/remaja7.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja </h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak1.jpg" class="glightbox"><img src="assets/img/menu/anak1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak2.jpg" class="glightbox"><img src="assets/img/menu/anak2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak3.jpg" class="glightbox"><img src="assets/img/menu/anak3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak4.jpg" class="glightbox"><img src="assets/img/menu/anak4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak5.jpg" class="glightbox"><img src="assets/img/menu/anak5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak6.jpg" class="glightbox"><img src="assets/img/menu/anak6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->
              
            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Breakfast</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/bajudewasa1.jpg" class="glightbox"><img src="assets/img/bajudewasa1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                 XXL,XL,L,M
                </p>
                <p class="price">
                  Rp.200.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa2.jpg" class="glightbox"><img src="assets/img/menu/dewasa2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                  XXL,XL,L,M
                </p>
                <p class="price">
                  Rp.200,000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa3.jpg" class="glightbox"><img src="assets/img/menu/dewasa3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                  XXL,XL,L,m
                </p>
                <p class="price">
                  Rp.200,000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa4.jpg" class="glightbox"><img src="assets/img/menu/dewasa4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                  XXL,XL,L,M
                </p>
                <p class="price">
                  Rp.200,000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa5.jpg" class="glightbox"><img src="assets/img/menu/dewasa5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                  XXL,XL,L,M
                </p>
                <p class="price">
                  Rp.200.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dewasa6.jpg" class="glightbox"><img src="assets/img/menu/dewasa6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Busana Muslim</h4>
                <p class="ingredients">
                  XXL,XL,L,M
                </p>
                <p class="price">
                  Rp.200.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Remaja</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja1.jpg" class="glightbox"><img src="assets/img/menu/remaja1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja </h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja2.jpg" class="glightbox"><img src="assets/img/menu/remaja2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja</h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja3.jpg" class="glightbox"><img src="assets/img/menu/remaja3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja</h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja4.jpg" class="glightbox"><img src="assets/img/menu/remaja4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja </h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja6.jpg" class="glightbox"><img src="assets/img/menu/remaja6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja </h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/remaja7.jpg" class="glightbox"><img src="assets/img/menu/remaja7.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Remaja </h4>
                <p class="ingredients">
                  XXL,XL,L,M.
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>anak</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak1.jpg" class="glightbox"><img src="assets/img/menu/anak1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak2.jpg" class="glightbox"><img src="assets/img/menu/anak2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak3.jpg" class="glightbox"><img src="assets/img/menu/anak3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak4.jpg" class="glightbox"><img src="assets/img/menu/anak4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak5.jpg" class="glightbox"><img src="assets/img/menu/anak5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anak6.jpg" class="glightbox"><img src="assets/img/menu/anak6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baju Anak </h4>
                <p class="ingredients">
                  XL,L,M,s
                </p>
                <p class="price">
                  Rp.90.000
                </p>
              </div><!-- Menu Item -->   

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery1.jpg"><img src="assets/img/gallery/gallery1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery3.jpg"><img src="assets/img/gallery/gallery3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery4.jpg"><img src="assets/img/gallery/gallery4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery5.jpg"><img src="assets/img/gallery/gallery5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery6.jpg"><img src="assets/img/gallery/gallery6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://maps.google.com/maps?q=avisya+sport&t=&z=13&ie=UTF8&iwloc=&output=embed"  frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Troso,pecangaan Jepara</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>hubungi kami</h3>
                <p>+62 895351442510</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>utsmantuhrikhul@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>toko buka<br></h3>
                <p><strong>senin-sabtu:</strong> 09.00-22.00; <strong>minggu :</strong> Closed</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
        
      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container copyright text-center mt-4">
      <p>@ <span>hakcipta</span> <strong class="px-1 sitename">tuhrikhul</strong> <span>All Rights Reserved</span></p>
     
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