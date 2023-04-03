<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_CS = $_GET['id_customer'];
  $sql = "select * from customer where id_customer='$ID_CS'";
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
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Data Pelanggan <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-Pelanggan.php">
                <input type="hidden" name="id_customer" value="<?php echo $ID_CS; ?>">

                    <div class="form-group">
                    <label for="nama" class="labelfrm">Nama</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-font"></span></span>
                          <input id="nama" class="form-control" type="text" placeholder="Nama" name="nama" required="true" autocomplete="off" value="<?php echo $View['nama']; ?>">
                        </div>
                      <label for="alamat" class="labelfrm">Alamat</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
                          <input id="alamat" class="form-control" type="text" placeholder="Alamat" name="alamat" required="true" autocomplete="off" value="<?php echo $View['alamat']; ?>">
                        </div>
                      <label for="no_telp" class="labelfrm">No. Hp/Telp.</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
                          <input id="no_telp" class="form-control" type="text" placeholder="No. Hp/Telp." name="no_telp" autocomplete="off" value="<?php echo $View['no_telp']; ?>">
                        </div>
                      <label for="email" class="labelfrm">E-mail</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-envelope-o"></span></span>
                          <input id="email" class="form-control" type="text" placeholder="E-mail" name="email" autocomplete="off" value="<?php echo $View['email']; ?>">
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

