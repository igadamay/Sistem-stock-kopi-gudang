
<?php
     include 'connect.php';

     ?>
<!DOCTYPE html>
<html lang="en">

<head>
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

    <link href="Vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <link href="Vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top" style=" background-color: #fff7f1;">
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
          <li><a href="stockgudang.php">Stock Gudang</a></li>
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
          <h2>Data Kopi</h2>
          <ol>
            <li><a href="index1.html">Home</a></li>
            <li><a href="data_kopi.php">Data Kopi</a></li>
            <li>Data Gudang</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
            <div class="container-fluid">
            <br>
            <div class="col-lg-2 mb-4">
               <a href="tambahdata.php">Tambah Data Admin</a>
            </div>
           
            <div class="row">
             <div class="col-xl-8 col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tables Kopi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                 <table class="table table-bordered text-gray-800" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Label Kopi</th>
                                            <th>Jenis Kopi</th>
                                            <th>Tanggal</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Jumlah Kopi (KG)</th>
                                            <th>Exp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php 
                  $no = 1;
                  $totalkopi=0;
                                 $data = mysqli_query($koneksi,"select * from kopi");
                         while($d = mysqli_fetch_array($data)){
                          $Jumlah_kopi = $d[5];
                          $totalkopi = $totalkopi + $Jumlah_kopi;
                            ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['Idkopi']; ?></td>
                            <td><?php echo $d['Jenis_kopi']; ?></td>
                            <td><?php echo $d['Tanggal']; ?></td>
                            <td><?php echo $d['Bulan']; ?></td>
                            <td><?php echo $d['Tahun']; ?></td>
                            <td><?php echo $d['Jumlah_kopi']; ?></td>
                            <td><?php echo $d['Exp']; ?></td>
                            
                            </tr>
                              <?php 

                                    } 
                                 ?>
                                    </tbody>
                                     </table>
                            </div>
                        </div>
                    </div>
                
                  
        </div>
             <div class="col-xl-4 col-lg-7">
 <div class="card shadow mb-4" id="buatpdfcilacap">
                                <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
             <h6 class="m-0 font-weight-bold text-primary">Total Kopi</h6>
         </div>
        <div class="card-body">
       <h3>Stock Kopi Dalam Gudang</h3>
              <ul>
                <li><strong>Arabika Gayo</strong>: 1732 Kg</li>
                <li><strong>Arabika Toraja</strong>: 1600 Kg</li>
                <li><strong>Robusta</strong>: 1800 Kg</li>
                <li><strong>Luwak</strong>: 500 Kg</li>
                <li><strong>Kakao Coffe</strong>: 400 Kg</li>
              </ul>
      </div>
</div>          
            </div>
        </div><!-- row-->
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