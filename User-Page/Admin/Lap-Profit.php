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
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include '../../Controller/koneksi.php';
session_start(); ?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <img src="../../image/Logo-DFarm.png" class="Icon">
    <a class="navbar-brand" href="Admin-Index.php">&nbsp;Hai! Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
          <a data-toggle="tooltip" data-placement="bottom" title="Yakin Meh Logout?" class="nav-link" href="../../Controller/logout.php">
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
          <a data-toggle="tooltip" data-placement="bottom" title="Halaman Utama Laporan" href="Home-Laporan.php">Laporan</a>
        </li>
        <li class="breadcrumb-item active">Admin D-Farm Timang</li>
      </ol>
<!-- End Breadcrumbs-->
<!-- Isine ning kene -->
<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-file-text-o"></i> Laporan Profit</div>
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
                <form id="FormValidation" method="post" action="Lap-Profit.php">
                    
                    <div class="form-group">
                      <label for="tgl_awal" class="labelfrm">Dari Tanggal</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input id="tgl_awal" class="form-control" type="date" name="tgl_awal" required="true" autocomplete="off">
                        </div>
                      <label for="tgl_akhir" class="labelfrm">Sampai Tanggal</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input id="tgl_akhir" class="form-control" type="date" name="tgl_akhir" required="true" autocomplete="off">
                        </div>
                    </div>

                  <div class="modal-footer">
            <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Cari" class="btn btn-primary buttonLog" name="pencarian">Cari <i class="fa fa-search"></i></button></a>
            <button type="reset" data-toggle="tooltip" data-placement="bottom" title="Reset" class="btn btn-default buttonBatt">Reset <i class="fa fa-refresh"></i></button>
                  </div>
                </form>
<?php
      //proses jika sudah klik tombol pencarian data
      if(isset($_POST['pencarian'])){
      //menangkap nilai form
      $tanggal_awal=$_POST['tgl_awal'];
      $tanggal_akhir=$_POST['tgl_akhir'];

      $ForTglAWAL=date('d-M-Y', strtotime($tanggal_awal));
      $ForTglAKHIR=date('d-M-Y', strtotime($tanggal_akhir));
?>
<a data-toggle="tooltip" data-placement="bottom" title="Klik untuk Mencetak" href="../../Laporan/Rep-Profit.php?awal=<?php echo $tanggal_awal; ?>&akhir=<?php echo $tanggal_akhir; ?>"><button class="AddSkh"><i class="fa fa-print"></i> Print Laporan Modal</button></a>
<?php 
    $sql3="select SUM(total_Mpakan) AS tot_kabeh_Mpakan  FROM m_pakan where tgl_beli between '$tanggal_awal' and '$tanggal_akhir'";
    $query3 = mysql_query($sql3);
    $View3=mysql_fetch_array($query3);
      $sql4="select SUM(total_Mlain) AS tot_kabeh_Mlain  FROM m_lain where tgl_beli between '$tanggal_awal' and '$tanggal_akhir'";
      $query4 = mysql_query($sql4);
      $View4=mysql_fetch_array($query4);

      $TOT_MPAKAN=$View3['tot_kabeh_Mpakan'];
      $TOT_MLAIN=$View4['tot_kabeh_Mlain'];

      $ALL=$TOT_MPAKAN+$TOT_MLAIN;
      $TOT_KABEH=number_format($ALL);

        $sql5="select SUM(pembayaran) AS tot_penjualan  FROM penjualan_telur where tanggal_jual BETWEEN '$tanggal_awal' and '$tanggal_akhir'";
        $query5=mysql_query($sql5);
        $View5=mysql_fetch_array($query5);

        $PMBY=$View5['tot_penjualan'];
        $TOT_JUAL=number_format($PMBY);

        $sql6="select SUM(jml_telur) AS tot_telur_terjual  FROM penjualan_telur where tanggal_jual BETWEEN '$tanggal_awal' and '$tanggal_akhir'";
        $query6=mysql_query($sql6);
        $View6=mysql_fetch_array($query6);

        $TELUR=$View6['tot_telur_terjual'];
        $TOT_TELUR_JUAL=number_format($TELUR);

          $OP=$PMBY-$ALL;
          $OPIT=number_format($OP);
?>
<h6>Total Pengeluaran Modal dari tanggal <i><?php echo $ForTglAWAL; ?></i> sampai tanggal <i><?php echo $ForTglAKHIR; ?></i> : <b>Rp. <?php echo $TOT_KABEH; ?></b></h6>
<h6>Total Penjualan Telur dari tanggal <i><?php echo $ForTglAWAL; ?></i> sampai tanggal <i><?php echo $ForTglAKHIR; ?></i> : <b>Rp. <?php echo $TOT_JUAL; ?></b></h6>
<h6>Total Telur Terjual dari tanggal <i><?php echo $ForTglAWAL; ?></i> sampai tanggal <i><?php echo $ForTglAKHIR; ?></i> : <b><?php echo $TOT_TELUR_JUAL; ?> Butir</b></h6><br>
<h3>PROFIT : <b>Rp. <?php echo $OPIT; ?></b></h3>

            <table class="table table-bordered table-a" id="dataTable" width="100%" cellspacing="0">

              <!-- Data Penjualan Telur -->
              <thead>
                <tr>
                  <th>Tanggal Jual</th>
                  <th>Pelanggan</th>
                  <th>Jumlah Telur</th>
                  <th>Harga (/Butir)</th>
                  <th>Total Penjualan</th>
                  <th>Pembayaran</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
          <?php 
            $sql2="select penjualan_telur.*, customer.nama FROM customer inner join penjualan_telur on customer.id_customer=penjualan_telur.id_customer WHERE (penjualan_telur.tanggal_jual between '$tanggal_awal' and '$tanggal_akhir')";
            $query2 = mysql_query($sql2);
            while ($View2=mysql_fetch_array($query2)) { 

            $HR=$View2['harga_perbtr'];
            $HARGA=number_format($HR);
            $TGL = $View2['tanggal_jual'];
            $ForTGLJual=date('d-M-Y', strtotime($TGL));
            $TOTP=$View2['total_pjl'];
            $TOTAL_PJL=number_format($TOTP);
            $PBY=$View2['pembayaran'];
            $PEMBAYARAN=number_format($PBY);          
          ?> 
                <tr>
                  <td><?php echo $ForTGLJual;?></td>
                  <td><?php echo $View2['nama']; ?></td>
                  <td><?php echo $View2['jml_telur'];?> Butir</td>
                  <td>Rp. <?php echo $HARGA; ?></td>
                  <td>Rp. <?php echo $TOTAL_PJL; ?></td>
                  <td>Rp. <?php echo $PEMBAYARAN; ?></td>
                  <td><?php echo $View2['keterangan']; ?></td>
                </tr>
            <?php } ?>  
              </tbody>

            <!-- Data Modal Pakan -->
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Tgl Beli</th>
                  <th>Keterangan</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
          <?php 
            $sql="select * FROM m_pakan WHERE tgl_beli between '$tanggal_awal' and '$tanggal_akhir'";
            $query = mysql_query($sql);
            while ($View=mysql_fetch_array($query)) { 

            $HR=$View['harga'];
            $HARGA=number_format($HR);
            $TGL = $View['tgl_beli'];
            $ForTGLBeli=date('d-M-Y', strtotime($TGL));
            $TOTP=$View['total_Mpakan'];
            $M_PAKAN=number_format($TOTP);          
          ?> 
                <tr>
                  <td><?php echo $View['nama'];?></td>
                  <td><?php echo $View['jumlah']; ?></td>
                  <td>Rp. <?php echo $HARGA;?></td>
                  <td><?php echo $ForTGLBeli; ?></td>
                  <td><?php echo $View['keterangan']; ?></td>
                  <td>Rp. <?php echo $M_PAKAN;?></td>
                </tr>
            <?php } ?>  
              </tbody>

            <!-- Data Modal Lain-lain -->
              <thead>
                <tr>
                  <th>Ket. Barang</th>
                  <th>Jumlah</th>
                  <th>Harga Beli</th>
                  <th>Tgl Beli</th>
                  <th>Keterangan</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
          <?php 
            $sql1="select * FROM m_lain WHERE tgl_beli between '$tanggal_awal' and '$tanggal_akhir'";
            $query1 = mysql_query($sql1);
            while ($View1=mysql_fetch_array($query1)) { 

            $HRG=$View1['harga_beli'];
            $HARGA_BELI=number_format($HRG);
            $TGL = $View1['tgl_beli'];
            $ForTGLBeli=date('d-M-Y', strtotime($TGL));
            $TOTL=$View1['total_Mlain'];
            $M_LAIN=number_format($TOTL);          
          ?> 
                <tr>
                  <td><?php echo $View1['ket_barang'];?></td>
                  <td><?php echo $View1['jumlah']; ?></td>
                  <td>Rp. <?php echo $HARGA_BELI; ?></td>
                  <td><?php echo $ForTGLBeli; ?></td>
                  <td><?php echo $View1['keterangan']; ?></td>
                  <td>Rp. <?php echo $M_LAIN;?></td>
                </tr>
            <?php } ?>  
              </tbody>
            </table>
          </div>
        </div>

            <?php }else{
                    unset($_POST['pencarian']);}
            ?> 

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
