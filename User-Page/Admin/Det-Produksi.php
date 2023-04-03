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
          <a data-toggle="tooltip" data-placement="bottom" title="Halaman Utama Produksi Telur" href="Produksi.php">Produksi Telur</a>
        </li>
        <li class="breadcrumb-item active">Admin D-Farm Timang</li>
      </ol>
<!-- End Breadcrumbs-->
<!-- Isine ning kene -->
<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-file-text-o"></i> Data Detail Produksi Telur</div>
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
<?php 

$ID_PRO=$_GET['id_produksi'];

$sql0="select * from produksi where id_produksi='$ID_PRO'";
$query0=mysql_query($sql0);
$lihat=mysql_fetch_array($query0);
?>

<h4><b>Produksi :</b> <?php echo $lihat['kandang']; ?></h4>
<a data-toggle="tooltip" data-placement="bottom" title="Menambah Produksi Harian" href="#"><button class="AddSkh" data-toggle="modal" data-target="#modalAddMDL"><i class="fa fa-plus"></i> Tambah Produksi Harian</button></a>
            <table class="table table-bordered table-a" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Tanggal Produksi</th>
                  <th>Jumlah Produksi (Butir)</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Tanggal Produksi</th>
                  <th>Jumlah Produksi (Butir)</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </tfoot> 

              <tbody>
          <?php 
            $no=0;
            $sql="select * FROM det_produksi where id_produksi='$ID_PRO'";
            $query = mysql_query($sql);
            while ($View=mysql_fetch_array($query)) { 

            $no++;
            $TGL = $View['tgl_produksi'];
            $ForTGLProduksi=date('d-M-Y', strtotime($TGL));          
          ?> 
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $ForTGLProduksi; ?></td>
                  <td><?php echo $View['jumlah_produksi']; ?> Butir</td>
                  <td><?php echo $View['keterangan']; ?></td>
                  <td>
                    <a data-toggle="tooltip" data-placement="right" title="Hapus" href="#" onclick="confirm_modal('DELETE/delete-DetProduksi.php?&id_detproduksi=<?php echo  $View['id_detproduksi']; ?>');"><button class="butDelete"><i class="fa fa-trash"></i></button></a>
                  </td>
                </tr>
            <?php } ?>  
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
 
<!-- SCRIPT VALIDASI INPUT HANYA ANGKA -->  
  <script>
    function mungAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>
   
<!-- Modal Delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header" style="background-color: #b9c9fe;">
        <h4 class="modal-title" style="text-align:center;">Anda yakin ingin menghapus Data ?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      
      <div class="form-group">
        <img src="../../Image/icons-TRASH.gif" style="width: 200px; margin-left: 140px; ">
      </div> 
          
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align: center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete <i class="fa fa-trash"></i></a>
        <button type="button" class="btn btn-default buttonBatt" data-dismiss="modal">Cancel <i class="fa fa-close"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

<!-- TAMBAH DETAIL PRODUKSI TELUR -->
<!-- Modal Add Detail Produksi Telur -->
<?php   
  $sql2="select * FROM det_produksi";
  $query2=mysql_query($sql2); 
?>  
<div class="modal fade" id="modalAddMDL" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header" style="background-color: #DDDDDD;">
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Tambah Produksi Harian <i class="fa fa-pencil"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="SIMPAN-DATA/Proses-Save-DetProduksi.php">
                <input type="hidden" name="id_detproduksi" value=<?php echo $query2; ?>>
                <input type="hidden" name="id_produksi" value=<?php echo $ID_PRO; ?>>
                    
                    <div class="form-group">
                      <label for="tgl_produksi" class="labelfrm">Tanggal Produksi</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input id="tgl_produksi" class="form-control" type="date" name="tgl_produksi" required="true" autocomplete="off">
                        </div>
                      <label for="jumlah_produksi" class="labelfrm">Jumlah Telur (Butir)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-shopping-basket"></span></span>
                          <input id="jumlah_produksi" class="form-control" type="text" placeholder="Jumlah Telur (Butir)" name="jumlah_produksi" required="true" autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="keterangan" class="labelfrm">Keterangan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-exclamation-circle"></span></span>
                          <input id="keterangan" class="form-control" type="text" placeholder="Keterangan" name="keterangan" autocomplete="off">
                        </div>
                    </div>

                  <div class="modal-footer">
            <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Simpan" class="btn btn-primary buttonLog">Simpan <i class="fa fa-check"></i></button></a>
            <button type="reset" data-toggle="tooltip" data-placement="bottom" title="Batal" class="btn btn-default buttonBatt" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>

            <!-- Modal Footer --> 
        </div>
    </div>
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
