<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>User D-Farm</title>
  <link rel="shortcut icon" href="../../Image/favicon.ico">
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="Style-Petugas.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include '../../Controller/koneksi.php';
session_start(); 
$NO_BELI = $_GET['no_pembelian'];
?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <img src="../../image/Logo-DFarm.png" class="Icon">
    <a class="navbar-brand" href="index-MorUser.php">&nbsp;Hai! <?php echo $_SESSION['username']; ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index-MorUser.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="Profil-Petugas.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profil</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseLaporan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseLaporan">
            <li>
              <a href="Laporan-Pembelian.php">Laporan Pembelian B.P</a>
            </li>
            <li>
              <a href="Laporan-Produksi.php">Laporan Produksi Telur</a>
            </li>
            <li>
              <a href="Laporan-Penjualan.php">Laporan Penjualan Telur</a>
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
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Controller/logout.php">
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
          <a href="Laporan-Pembelian.php">Laporan Pembelian Bahan Pakan</a>
        </li>
        <li class="breadcrumb-item active">User D-Farm Timang</li>
      </ol>
<!-- End Breadcrumbs-->
<!-- Isine ning kene -->
<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-file-text-o"></i> Detail Pembelian Bahan Pakan</div>
        <div class="card-body">
          <div class="table-responsive">

<style type="text/css">
  .table-a
{   font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;
    width: 1100px;
    text-align: left;
    font-size: 12pt;
    border-collapse: collapse;
}
.table-a th
{   font-size: 16px;
    font-weight: bold;
    padding: 8px;
    background: #4c5256;
    border-top: 4px solid #272822;
    border-bottom: 1px solid #fff;
    color: #fff;
}
.table-a td
{   padding: 8px;
    background: #DDDDDD;
    border-bottom: 1px solid #fff;
    color: black;
    border-top: 1px solid transparent;
}
.table-a tr:hover td
{   background: #8a8988;
    color: #fff;
}
button.butEdit{
  background-color: #00FA08;
  border-radius: 7px;
}
button.butEdit:hover{
  -webkit-transform:scale(1.4);
    transform:scale(1.4);
  background: #00AB0E;
  color: #fff;
}

button.butDetail{
  background-color: #FF7700;
  border-radius: 7px;
}
button.butDetail:hover{
  -webkit-transform:scale(1.4);
    transform:scale(1.4);
  background: #B65616;
  color: #fff;
}

button.butDelete{
  background-color: red;
  border-radius: 7px;
}
button.butDelete:hover{
  -webkit-transform:scale(1.4);
    transform:scale(1.4);
  background: #CC0909;
  color: #fff;
}
button.AddSkh{
  background-color: #007bff;
  border-radius: 5px;
  color: #fff;
  margin-top: 10px;
  margin-left: 15px;
  margin-bottom: 20px;
}
button.AddSkh:hover{
 -webkit-transform:scale(1.2);
  transform:scale(1.2);
  background-color: #005ca7; 
}

.btn.btn-default.buttonBatt{
  margin-left: 10px;
  float: left;
  background-color: #dd5347;
  color: #fff;
}

.btn.btn-default.buttonBatt:hover{
-webkit-transform:scale(1.1);
  transform:scale(1.1);
  background-color: #91302c;
}
.btn.btn-danger:hover{
 -webkit-transform:scale(1.1);
  transform:scale(1.1); 
}

.btn.btn-primary.buttonLog:hover{
-webkit-transform:scale(1.1);
  transform:scale(1.1);
  background-color: #005ca7;
}
</style>
<?php
  $sql="select * from pembelian_bhnpkn where no_pembelian='$NO_BELI'";
  $query=mysql_query($sql);
  $Tampil=mysql_fetch_array($query);
    $TGL = $Tampil['tgl_pembelian'];
    $ForTGLBeli=date('d-M-Y', strtotime($TGL));
    $TOTT= $Tampil['total'];
    $TOTAL=number_format($TOTT);
?>
<h5><b>Nomor Pembelian : </b><?php echo $NO_BELI; ?></h5>
<h5><b>Tanggal Pembelian : </b><?php echo $ForTGLBeli; ?></h5>
<h5><b>Total Pembelian : </b>Rp. <?php echo $TOTAL; ?></h5>

<a href="../../Laporan/Rep-Pembelian.php?no_pembelian=<?php echo $NO_BELI; ?>"><button class="AddSkh"><i class="fa fa-print"></i> Cetak Pembelian Bahan</button></a>
            <table class="table table-bordered table-a" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Bahan</th>
                  <th>Harga (Per Kg)</th>
                  <th>Jumlah (Kg)</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama Bahan</th>
                  <th>Harga (Per Kg)</th>
                  <th>Jumlah (Kg)</th>
                  <th>Subtotal</th>
                </tr>
              </tfoot> 

              <tbody>
          <?php 
            $sql1="select bahanpakan.nama_bahan, detpembelian_bhnpkn.id_detpembelian ,detpembelian_bhnpkn.hargabeli, detpembelian_bhnpkn.jumlah, detpembelian_bhnpkn.subtotal from bahanpakan inner join detpembelian_bhnpkn on bahanpakan.id_bahan=detpembelian_bhnpkn.id_bahan where (detpembelian_bhnpkn.no_pembelian='".$NO_BELI."')";
            $query1 = mysql_query($sql1);
            while ($View=mysql_fetch_array($query1)) { 
            $Harga=$View['hargabeli'];
            $ForHarga=number_format($Harga);
            $Subtotal=$View['subtotal'];
            $ForSubtotal=number_format($Subtotal);                
          ?> 
                <tr>
                  <td><?php echo $View['nama_bahan']; ?></td>
                  <td>Rp. <?php echo $ForHarga; ?></td>
                  <td><?php echo $View['jumlah']; ?> Kg</td>
                  <td>Rp. <?php echo $ForSubtotal; ?></td>
                </tr>
            <?php } ?>  
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
