<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_GJ = $_GET['id_kry'];
  $sql = "select * from gj_karyawan where id_kry='$ID_GJ'";
  $query = mysql_query($sql);
  while($View = mysql_fetch_array($query)){
?>
<style type="text/css">
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

.btn.btn-primary.buttonLog:hover{
-webkit-transform:scale(1.1);
  transform:scale(1.1);
}
</style>

<!-- SCRIPT VALIDASI INPUT HANYA ANGKA -->  
  <script>
    function mungAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>
  
      <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header" style="background-color: #DDDDDD;">
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Gaji Karyawan <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-GJkry.php">
                <input type="hidden" name="id_kry" value="<?php echo $ID_GJ; ?>">
                <input type="hidden" name="total_MODAL" value="<?php echo $View['gaji']; ?>">

                    <div class="form-group">
                      <label for="nama_kry" class="labelfrm">Nama</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-font"></span></span>
                          <input id="nama_kry" class="form-control" type="text" placeholder="Nama" name="nama_kry" required="true" autocomplete="off" value="<?php echo $View['nama_kry']; ?>">
                        </div>
                      <label for="alamat" class="labelfrm">Alamat</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
                          <input id="alamat" class="form-control" type="text" placeholder="Alamat" name="alamat" required="true" autocomplete="off" value="<?php echo $View['alamat']; ?>">
                        </div>
                      <label for="no_hp" class="labelfrm">No. Hp/Telp.</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
                          <input id="no_hp" class="form-control" type="text" placeholder="No. Hp/Telp." name="no_hp" autocomplete="off" value="<?php echo $View['no_hp']; ?>">
                        </div>
                      <label for="usia" class="labelfrm">Usia</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <input id="usia" class="form-control" type="text" placeholder="Usia" name="usia" autocomplete="off" value="<?php echo $View['usia']; ?>">
                        </div>
                      <label for="gaji" class="labelfrm">Gaji</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-money"></span></span>
                          <input id="gaji" class="form-control" type="text" placeholder="Gaji" name="gaji" required="true" autocomplete="off" onkeypress="return mungAngka(event)" value="<?php echo $View['gaji']; ?>">
                        </div>
                      <label for="tgl_gaji" class="labelfrm">Tanggal Gaji</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input id="tgl_gaji" class="form-control" type="date" name="tgl_gaji" required="true" autocomplete="off" value="<?php echo $View['tgl_gaji']; ?>">
                        </div>
                      <label for="keterangan" class="labelfrm">Keterangan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-exclamation-circle"></span></span>
                          <input id="keterangan" class="form-control" type="text" placeholder="Keterangan" name="keterangan" autocomplete="off" value="<?php echo $View['keterangan']; ?>">
                        </div>
                    </div>
                 
                  <div class="modal-footer" style="text-align: center;">
            <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Simpan" class="btn btn-primary  buttonLog">Simpan <i class="fa fa-check"></i></button></a>
            <button type="reset" data-toggle="tooltip" data-placement="bottom" title="Batal" class="btn btn-default buttonBatt" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>
                <?php } ?>
            <!-- Modal Footer --> 
          </div>
        </div>

