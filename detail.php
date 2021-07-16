<?php
include 'connect.php';
$totalkopi = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DiKopiJoglo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 
  <link href="assets/img/iconiga.png"" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  
  <main id="main">

   <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Belanja Kopi</h2>
          <ol>
            <li><a href="index1.html">Home</a></li>
            <li><a href="belanja_kopi.php">Transaksi Kopi</a></li>
            <li>Belanja Kopi</li>
          </ol>
        </div>

      </div>
    </section>

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/robusta.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/robusta.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/robusta.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Kopi Arabika   Rp.800.000</h3>
              <form method="POST" action="detail.php">
               <div class="form-group mb-3">
               <p>Pembelian dalam satuan Kg</p>
                      <select class="form-control" name="Jenis_kopi" >
                        <option selected>Jumlah Kopi</option>
                          <option name="beli" value="10">10</option>
                          <option name="beli" value="20">20</option>
                          <option  name="beli" value="50">50</option>
                      </select>
                  </div>
                   <div class="form-group mb-3">
                     <p>Pembelian dalam satuan Kwintal</p>
                      <select class="form-control" name="Jenis_kopi" >
                        <option selected>Jumlah Kopi</option>
                          <option name="beli" value="10">10</option>
                          <option name="beli" value="20">20</option>
                          <option  name="beli" value="50">50</option>
                      </select>
                    </div>
                     <div class="form-group mb-3">
                      <p class="text-primary">Pilihan jika ada jumlah lain</p>
                      <input type="text" name="Jenis_kopi" placeholder="Jumlah Lain" >
                     </div>
                   <div class="form-group mb-3">
                    <button  class="btn btn-primary" onClick="alert('Transaksi Berhasil!')">Submit</button>
                   </div>
                </form>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

</body>

</html>