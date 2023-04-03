<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_MBibit = $_GET['id_mbibit'];
  $sql = "select * from m_bibit where id_mbibit='$ID_MBibit'";
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
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Modal Bibit <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-Mbibit.php">
                <input type="hidden" name="id_mbibit" value="<?php echo $ID_MBibit; ?>">
                <input type="hidden" name="total_MODAL" value="<?php echo $View['total_Mbibit']; ?>">

                    <div class="form-group">
                      <label for="nama" class="labelfrm">Nama</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-font"></span></span>
                          <input id="nama" class="form-control" type="text" placeholder="Nama" name="nama" required="true" autocomplete="off"  value="<?php echo $View['nama']; ?>">
                        </div>
                      <label for="populasi" class="labelfrm">Jumlah Populasi (Ekor)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-plus-circle"></span></span>
                          <input id="populasi" class="form-control" type="text" placeholder="Jumlah Populasi (Ekor)" name="populasi" required="true" autocomplete="off" onkeypress="return mungAngka(event)" value="<?php echo $View['populasi']; ?>">
                        </div>
                      <label for="harga" class="labelfrm">Harga (/Ekor)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-money"></span></span>
                          <input id="harga" class="form-control" type="text" placeholder="Harga (/Ekor)" name="harga" required="true" autocomplete="off" onkeypress="return mungAngka(event)" value="<?php echo $View['harga']; ?>">
                        </div>
                      <label for="tgl_bibit" class="labelfrm">Tanggal Masuk</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input id="tgl_bibit" class="form-control" type="date" name="tgl_bibit" required="true" autocomplete="off" value="<?php echo $View['tgl_bibit']; ?>">
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

