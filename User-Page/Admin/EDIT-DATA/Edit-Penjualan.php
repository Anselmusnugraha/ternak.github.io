<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_PJL = $_GET['id_penjualan'];
  $sql = "select * from penjualan_telur where id_penjualan='$ID_PJL'";
  $query = mysql_query($sql); 
  while ($View = mysql_fetch_array($query)){
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
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Penjualan Telur <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-Penjualan.php">
                <input type="hidden" name="id_penjualan" value="<?php echo $ID_PJL; ?>">
                <input type="hidden" name="TOT_PMBY"  value="<?php echo $View['pembayaran'];?>">

                    <div class="form-group">
                    <label for="tanggal_jual" class="labelfrm">Tanggal Penjualan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input id="tanggal_jual" class="form-control" type="date" name="tanggal_jual" required="true" autocomplete="off" value="<?php echo $View['tanggal_jual']; ?>">
                        </div>
                      <label for="jml_telur" class="labelfrm">Jumlah Telur</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-shopping-basket"></span></span>
                          <input id="jml_telur" class="form-control" type="text" placeholder="Jumlah Telur" name="jml_telur" required="true" autocomplete="off" onkeypress="return mungAngka(event)" value="<?php echo $View['jml_telur']; ?>">
                        </div>
                      <label for="harga_perbtr" class="labelfrm">Harga (/Butir)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-dollar"></span></span>
                          <input id="harga_perbtr" class="form-control" type="text" placeholder="Harga (/Butir)" name="harga_perbtr" autocomplete="off" required="true" onkeypress="return mungAngka(event)" value="<?php echo $View['harga_perbtr']; ?>">
                        </div>
                      <label for="pembayaran" class="labelfrm">Pembayaran</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-money"></span></span>
                          <input id="pembayaran" class="form-control" type="text" placeholder="Pembayaran" name="pembayaran" autocomplete="off" required="true" onkeypress="return mungAngka(event)" value="<?php echo $View['pembayaran']; ?>">
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

