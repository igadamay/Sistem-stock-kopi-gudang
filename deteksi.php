
<?php
     include 'connect.php';

     ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    .orange{

  background:#f03c02;
}

</style>
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

  <!-- Template Main CSS File #dceeff -->
  <link href="assets/css/style.css" rel="stylesheet">

    <link href="Vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <link href="Vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top"  style=" background-color: #fff7f1;">
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">dikopijoglo.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>085866697088</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">DiKopi</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="index1.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>Transaksi Kopi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="deteksi.php">Deteksi Kopi</a></li>
              <li><a href="belanja_kopi.php">Belanja Kopi</a></li>
              </ul>
          </li>
          <li><a href="data_kopi.php">Data Kopi</a></li>
          <li><a href="data_gudang.php">Stock Gudang</a></li>
          <li><a href="transaksi.php">Riwayat Transaksi</a></li>
           <li><a href="index.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<main id="main">
   <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Deteksi Kopi</h2>
          <ol>
            <li><a href="index1.html">Home</a></li>
            <li><a href="deteksi.php">Transaksi Kopi</a></li>
            <li>Deteksi Kopi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
            <div class="container">
                <br>
           
             <div class="col-xl-12 col-lg-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="card-body">
                     <div class="row no-gutters align-items-center">
                    
                        <h5 class="text-center mb-4 text-gray-800">Tambah Data Kopi</h5>
                    
                <!-- isi -->
                <div class="col-lg-7">
                  <form action="aksi_tambahkopi.php" method="post" >
                  
                  <div class="form-group mb-3">
                        <label >Label Kopi</label>
                        <input type="text" class="form-control" name="Idkopi" aria-describedby="emailHelp" placeholder="Label Coffe" required>
                  </div>

                  <div class="form-group mb-3">
                    <label>Jenis Kopi</label>
                      <select class="form-control" name="Jenis_kopi" required>
                        <option selected>Jenis Kopi</option>
                          <option name ="Jenis_kopi" value="Arabika Gayo">Arabika Gayo</option>
                          <option name ="Jenis_kopi" value="Arabika Toraja">Arabika Toraja</option>
                          <option name="Jenis_kopi" value="Kintamani">Kintamani</option>
                          <option name ="Jenis_kopi" value="Robusta">Robusta</option>
                          <option name ="Jenis_kopi" value="Luwak">Luwak</option>
                      </select>
                  </div>

                    <div class="form-row" >
                        <div class="col-md-6 mb-3">
                          <label>Tanggal</label>
                          <input type="number" class="form-control" name="Tanggal" placeholder="Tanggal" required>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltip04">Bulan</label>
                           <select class="form-control" name="Bulan" required>
                                        <option selected>Bulan</option>
                                        <option name ="Bulan" value="Januari">Januari</option>
                                        <option name ="Bulan" value="Februari">Februari</option>
                                        <option name="Bulan" value="Maret">Maret</option>
                                        <option name ="Bulan" value="April">April</option>
                                        <option name ="Bulan" value="Mei">Mei</option>
                                        <option name ="Bulan" value="Juni">Juni</option>
                                        <option name ="Bulan" value="Juli">Juli</option>
                                        <option name="Bulan" value="Agustus">Agustus</option>
                                        <option name ="Bulan" value="September">September</option>
                                        <option name ="Bulan" value="Oktober">Oktober</option>
                                        <option name ="Bulan" value="November">November</option>
                                        <option name ="Bulan" value="Desember">Desember</option>
                                </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltip05">Tahun</label>
                          <input type="text" class="form-control" name="Tahun" placeholder="Tahun" required>
                        </div>
                      </div>
                   <div class="form-group mb-3" >
                    <label>Penulisan nominal tanpa menggunakan titik</label>
                        <input type="number" class="form-control" name="Jumlah_kopi" aria-describedby="emailHelp" placeholder="Jumlah kopi Coffe" required>
                  </div>
                  <div class="form-group mb-3">
                    <label>Exparied Kopi</label>
                       <input type="date" name="Exp" class="form-control form-control-user" placeholder="Exparied" required>
                  </div>
                      <button type="submit" class="btn btn-danger " type="submit" value="submit" name="<?php echo $value;?>">Submit</button>
                </form>
                    

                </div>
                </div>

                </div>
                </div>
        </div>
        </div>
                <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
                 </a>
                    <!-- Content Row -->

    <script src="Vendor/jquery/jquery.min.js"></script>
    <script src="Vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="Vendor/chart.js/Chart.min.js"></script>
    <script src="Vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="Vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

</body>
</html>