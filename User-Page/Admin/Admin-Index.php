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
        <li class="nav-item">
          <a class="nav-link"  data-toggle="tooltip" data-placement="bottom" title="Dashboard" href="Admin-Index.php">
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
          <a  data-toggle="tooltip" data-placement="Left" title="Halaman Utama Dashboard" href="Admin-Index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Admin D-Farm Timang</li>
      </ol>
<!-- End Breadcrumbs-->
      <!-- Icon Cards-->
<?php

  $sql="select * FROM profit;";
  $query=mysql_query($sql); 
  while ($tampil = mysql_fetch_array($query)) {
    $MODOUT=$tampil['total_modalOut'];
    $TotalModal=number_format($MODOUT);

    $PJL=$tampil['total_PenjualanTelur'];
    $TotalPenjualan=number_format($PJL);

    $OP=$tampil['Keuntungan'];
    $Profit=number_format($OP);
?>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-cart-plus"></i>
              </div>
              <div class="mr-5">Rp.  <span class="count"><?php echo $TotalModal; ?></span></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Total Modal (Keluar)</span>
              <span class="float-right">
                <i class="fa fa-angle-left"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-truck"></i>
              </div>
              <div class="mr-5">Rp. <span class="count"><?php echo $TotalPenjualan; ?></span></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Total Penjualan (Pemasukkan)</span>
              <span class="float-right">
                <i class="fa fa-angle-left"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-money"></i>
              </div>
              <div class="mr-5">Rp. <span class="count"><?php echo $Profit; ?></span></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Estimasi Profit</span>
              <span class="float-right">
                <i class="fa fa-angle-left"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
<?php } ?>

<div class="row">
<a href="User.php">
  <button class="setingButt" data-toggle="tooltip" data-placement="bottom" title="Data User"> 
    <div class="container-fluid">
      <h4>User</h4>
      <img src="../../Image/Petani.png" class="menu">
    </div>
  </button></a>
<a href="Home-Modal.php">
  <button class="setingButt" data-toggle="tooltip" data-placement="bottom" title="Data Modal yang dikeluarkan"> 
    <div class="container-fluid">
      <h4>Modal Keluar</h4>
      <img src="../../Image/cart-plus.png" class="menu">
    </div>
  </button></a>
<a href="Produksi.php">
  <button class="setingButt" data-toggle="tooltip" data-placement="bottom" title="Data Produksi Telur Bebek"> 
    <div class="container-fluid">
      <h4>Produksi Telur</h4>
      <img src="../../Image/Telur.png" class="menu">
    </div>
  </button></a>
<a href="Pakan-Margin.php">
  <button class="setingButt" data-toggle="tooltip" data-placement="bottom" title="Cek Harga Pakan dan Margin Profit"> 
    <div class="container-fluid">
      <h4>Pakan & Margin</h4>
      <img src="../../Image/timbangan.png" class="menu">
    </div>
  </button></a>
<a href="Home-Transaksi.php">
  <button class="setingButt" data-toggle="tooltip" data-placement="bottom" title="Data Transaksi"> 
    <div class="container-fluid">
      <h4>Transaksi</h4>
      <img src="../../Image/Manajemen.png" class="menu">
    </div>
  </button></a>
<a href="Home-Laporan.php">
  <button class="setingButt" data-toggle="tooltip" data-placement="bottom" title="Data Laporan"> 
    <div class="container-fluid">
      <h4>Laporan</h4>
      <img src="../../Image/Sheet_data.png" class="menu">
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
