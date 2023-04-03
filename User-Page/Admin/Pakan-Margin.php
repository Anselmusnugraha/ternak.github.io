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
          <a data-toggle="tooltip" data-placement="bottom" title="Halaman Utama Cek Harga Pakan dan Margin Profit" href="Pakan-Margin.php">Pakan & Margin Profit</a>
        </li>
        <li class="breadcrumb-item active">Admin D-Farm Timang</li>
      </ol>
<!-- End Breadcrumbs-->
<!-- Isine ning kene -->
<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-file-text-o"></i> Data Pakan & Margin Profit</div>
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
<a data-toggle="tooltip" data-placement="bottom" title="Menambah Data Harga Pakan" href="#"><button class="AddSkh" data-toggle="modal" data-target="#modalAddMDL"><i class="fa fa-plus"></i> Tambah Data Harga Pakan</button></a>
            <table class="table table-bordered table-a" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Populasi (Ekor)</th>
                  <th>Kebutuhan Pakan (Kg)</th>
                  <th>Komposisi PJ/Katul (%)</th>
                  <th>Komposisi Konsentrat (%)</th>
                  <th>Komposisi Aking/Gogik (Kg)</th>
                  <th>Komposisi Pakan Tambahan (Kg)</th>
                  <th>Harga Pakan (Rp/Kg)</th>
                  <th>Catatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Populasi (Ekor)</th>
                  <th>Kebutuhan Pakan (Kg)</th>
                  <th>Komposisi PJ/Katul (%)</th>
                  <th>Komposisi Konsentrat (%)</th>
                  <th>Komposisi Aking/Gogik (Kg)</th>
                  <th>Komposisi Pakan Tambahan (Kg)</th>
                  <th>Harga Pakan (Rp/Kg)</th>
                  <th>Catatan</th>
                  <th>Aksi</th>
                </tr>
              </tfoot> 

              <tbody>
          <?php 
            $no=0;
            $sql="select * FROM hit_pakan";
            $query = mysql_query($sql);
            while ($View=mysql_fetch_array($query)) {
            $no++;
            $HRG=$View['hrg_pakan'];
            $HargaPakan=number_format($HRG); 
          
          ?> 
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $View['Nama']; ?></td>
                  <td><?php echo $View['Populasi']; ?> Ekor</td>
                  <td><?php echo $View['Keb_pakan']; ?> Kg</td>
                  <td><?php echo $View['komp_pj']; ?> %</td>
                  <td><?php echo $View['komp_kons']; ?> %</td>
                  <td><?php echo $View['komp_tmb1']; ?> Kg</td>
                  <td><?php echo $View['komp_tmb2']; ?> Kg</td>
                  <td>Rp. <?php echo $HargaPakan; ?></td>
                  <td><?php echo $View['catatan']; ?></td>
                  <td>
                    <a data-toggle="tooltip" data-placement="bottom" title="Detail Harga Pakan" href="Det-Pakan-Margin.php?id_pakan=<?php echo $View['id_pakan']; ?>"><button class="butDetail" id="Edit"><i class="fa fa-list-alt"></i></button></a>
                    <a data-toggle="tooltip" data-placement="bottom" title="Edit" href="#" class='OpenModal' id='<?php echo $View['id_pakan']; ?>'><button class='butEdit' id='Edit'><i class='fa fa-edit'></i></button></a>
                    <a data-toggle="tooltip" data-placement="bottom" title="Hapus" href="#" onclick="confirm_modal('DELETE/delete-Pakan-Margin.php?&id_pakan=<?php echo  $View['id_pakan']; ?>');"><button class="butDelete"><i class="fa fa-trash"></i></button></a>
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

 <!-- EDIT DATA -->  
 <!-- Modal Edit -->  
<div class="modal fade" id="ModalEdit" role="dialog" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true">
</div> 
<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".OpenModal").click(function(e) {
      var m = $(this).attr("id");
       $.ajax({
             url: "EDIT-DATA/Edit-Pakan-Margin.php",
             type: "GET",
             data : {id_pakan: m,},
             success: function (ajaxData){
               $("#ModalEdit").html(ajaxData);
               $("#ModalEdit").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
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
        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" href="#" class="btn btn-danger" id="delete_link">Delete <i class="fa fa-trash"></i></a>
        <button data-toggle="tooltip" data-placement="bottom" title="Batal" type="button" class="btn btn-default buttonBatt" data-dismiss="modal">Cancel <i class="fa fa-close"></i></button>
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

<!-- TAMBAH HARGA PAKAN -->
<!-- Modal Add Harga Pakan -->
<?php   
  $sql2="select * FROM hit_pakan";
  $query2=mysql_query($sql2); 
?>  
<div class="modal fade" id="modalAddMDL" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header" style="background-color: #DDDDDD;">
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Tambah Data Harga Pakan <i class="fa fa-pencil"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="SIMPAN-DATA/Proses-Save-Pakan-Margin.php">
                <input type="hidden" name="id_pakan" value=<?php echo $query2; ?>>
                    
                    <div class="form-group">
                      <label for="Nama" class="labelfrm">Nama</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-font"></span></span>
                          <input id="Nama" class="form-control" type="text" placeholder="Nama Pakan" name="Nama" required="true" autocomplete="off">
                        </div>
                      <label for="hr_pj" class="labelfrm">PJ/Katul</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-usd"></span></span>
                          <input id="hr_pj" class="form-control" type="text" name="hr_pj" required="true" placeholder="Harga (Rp)" required="true" autocomplete="off" onkeypress="return mungAngka(event)">
                          <input type="text" class="form-control" name="qty_pj" required="true" autocomplete="off" placeholder="Quantity (Kg)" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="hr_kons" class="labelfrm">Konsentrat</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-usd"></span></span>
                          <input id="hr_kons" class="form-control" type="text" required="true" placeholder="Harga (Rp)" name="hr_kons" autocomplete="off" onkeypress="return mungAngka(event)">
                          <input type="text" class="form-control" name="qty_kons" required="true" autocomplete="off" placeholder="Quantity (Kg)" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="hr_tmb1" class="labelfrm">Aking/Gogik</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-usd"></span></span>
                          <input id="hr_tmb1" class="form-control" type="text" placeholder="Harga (Rp)" name="hr_tmb1" autocomplete="off" onkeypress="return mungAngka(event)">
                          <input type="text" class="form-control" name="qty_tmb1" autocomplete="off" placeholder="Quantity (Kg)" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="hr_tmb2" class="labelfrm">Pakan Tambahan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-usd"></span></span>
                          <input id="hr_tmb2" class="form-control" type="text" placeholder="Harga (Rp)" name="hr_tmb2" autocomplete="off" onkeypress="return mungAngka(event)">
                          <input type="text" class="form-control" name="qty_tmb2" autocomplete="off" placeholder="Quantity (Kg)" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="Populasi" class="labelfrm">Populasi</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-th"></span></span>
                          <input id="Populasi" class="form-control" type="text" placeholder="Populasi (Ekor)" name="Populasi" required="true" autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="Keb_pakan" class="labelfrm">Kebutuhan Pakan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-cutlery"></span></span>
                          <input id="Keb_pakan" class="form-control" type="text" placeholder="kebutuhan Pakan (Kg/Hari)" name="Keb_pakan" required="true" autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="komp_pj" class="labelfrm">Komposisi PJ/Katul (%)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-balance-scale"></span></span>
                          <input id="komp_pj" class="form-control" type="text" placeholder="Komposisi PJ/Katul (%)" name="komp_pj" required="true" autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="komp_kons" class="labelfrm">Komposisi Konsentrat (%)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-balance-scale"></span></span>
                          <input id="komp_kons" class="form-control" type="text" placeholder="Komposisi Konsentrat (%)" name="komp_kons" required="true" autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="komp_tmb1" class="labelfrm">Komposisi Aking/Gogik (Kg)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-balance-scale"></span></span>
                          <input id="komp_tmb1" class="form-control" type="text" placeholder="Komposisi Aking/Gogik (Kg)" name="komp_tmb1"  autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="komp_tmb2" class="labelfrm">Komposisi Pakan Tambahan (Kg)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-balance-scale"></span></span>
                          <input id="komp_tmb2" class="form-control" type="text" placeholder="Komposisi Pakan Tambahan (Kg)" name="komp_tmb2"  autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                      <label for="catatan" class="labelfrm">Catatan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-exclamation-circle"></span></span>
                          <input id="catatan" class="form-control" type="text" placeholder="Catatan" name="catatan"  autocomplete="off">
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
