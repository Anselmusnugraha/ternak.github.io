<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Welcome Admin</title>
  <link rel="shortcut icon" href="../../Image/favicon.ico">
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="Style-Admin.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include '../../Controller/koneksi.php';
session_start(); ?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <img src="../../image/Logo-DFarm.png" class="Icon">
    <a class="navbar-brand" href="Admin-Index.php">&nbsp;Hai! Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapsesponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Admin-Index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data User">
          <a class="nav-link" href="User.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">User</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Modal yang dikeluarkan">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text">Modal Keluar</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="M-Kandang.php">Modal Kandang</a>
            </li>
            <li>
              <a href="M-Bibit.php">Modal Bibit</a>
            </li>
            <li>
              <a href="M-Pakan.php">Modal Pakan</a>
            </li>
            <li>
              <a href="M-Other.php">Modal Lain-lain</a>
            </li>
            <li>
              <a href="M-Gaji.php">Gaji Karyawan</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Produksi Telur">
          <a class="nav-link" href="Produksi.php">
            <i class="fa fa-fw fa-cubes"></i>
            <span class="nav-link-text">Produksi Telur</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cek Harga Pakan dan Margin Profit">
          <a class="nav-link" href="Pakan-Margin.php">
            <i class="fa fa-fw fa-balance-scale"></i>
            <span class="nav-link-text">Pakan & Margin</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Transaksi">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTransaksi" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-exchange"></i>
            <span class="nav-link-text">Transaksi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseTransaksi">
            <li>
              <a href="Pelanggan.php">Pelanggan/Customer</a>
            </li>
            <li>
              <a href="Penjualan.php">Penjualan Telur</a>
            </li>
            <li>
              <a href="Tambahan.php">Pemasukan Tambahan</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Laporan">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseLaporan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-line-chart"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseLaporan">
            <li>
              <a href="Lap-Keluar.php">Laporan Pengeluaran</a>
            </li>
            <li>
              <a href="Lap-Penjualan.php">Laporan Penjualan Telur</a>
            </li>
            <li>
              <a href="Lap-Produksi.php">Laporan Produksi Telur</a>
            </li>
            <li>
              <a href="Lap-Profit.php">Laporan Profit</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pengaturan">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSetting" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Setting</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSetting">
            <li>
              <a href="Backup.php">Backup Database</a>
            </li>
            <li>
              <a href="#">Restore Database</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
<!-- Search & Login-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Yakin Meh Logout?" href="../../Controller/logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
<!-- End Search & Login-->
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a data-toggle="tooltip" data-placement="bottom" title="Halaman Utama Transaksi" href="Home-Transaksi.php">Transaksi</a>
        </li>
        <li class="breadcrumb-item active">Admin D-Farm Timang</li>
      </ol>
<!-- End Breadcrumbs-->
<div class="row">
<a data-toggle="tooltip" data-placement="bottom" title="Data Pelanggan" href="Pelanggan.php">
  <button class="setingButt"> 
    <div class="container-fluid">
      <h4>Data Pelanggan</h4>
      <img src="../../Image/Client.png" class="menu">
    </div>
  </button></a>
<a data-toggle="tooltip" data-placement="bottom" title="Data Penjualan Telur" href="Penjualan.php">
  <button class="setingButt"> 
    <div class="container-fluid">
      <h4>Penjualan Telur</h4>
      <img src="../../Image/truck.png" class="menu">
    </div>
  </button></a>
<a data-toggle="tooltip" data-placement="bottom" title="Data Pemasukkan Tambahan" href="Tambahan.php">
  <button class="setingButt"> 
    <div class="container-fluid">
      <h4>Pemasukan Tambahan</h4>
      <img src="../../Image/Pemasukkan.png" class="menu">
    </div>
  </button></a>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © D-Farm Timang 2019, ANS. Developed by Anselmus Nugraha</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
