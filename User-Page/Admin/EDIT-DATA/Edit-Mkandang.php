<?php include '../../../Controller/koneksi.php';?>
<?php
  $ID_MKandang = $_GET['id_mkandang'];
  $sql = "select * from m_kandang where id_mkandang='$ID_MKandang'";
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
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Edit Modal Kandang <i class="fa fa-edit"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
                <div class="modal-body">
                    <p class="statusMsg"></p> 
                <form id="FormValidation" method="post" action="EDIT-DATA/Controller-Edit/Proses-Edit-Mkandang.php">
                <input type="hidden" name="id_mkandang" value="<?php echo $ID_MKandang; ?>">
                <input type="hidden" name="total_MODAL" value="<?php echo $View['total_Mkandang']; ?>">

                    <div class="form-group">
                      <label for="ket_barang" class="labelfrm">Informasi Barang</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-font"></span></span>
                          <input id="ket_barang" class="form-control" type="text" placeholder="Informasi Barang" name="ket_barang" required="true" autocomplete="off"  value="<?php echo $View['ket_barang']; ?>">
                        </div>
                      <label for="jumlah" class="labelfrm">Jumlah</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-cart-plus"></span></span>
                          <input id="jumlah" class="form-control" type="text" placeholder="Jumlah" name="jumlah" required="true" autocomplete="off" onkeypress="return mungAngka(event)" value="<?php echo $View['jumlah']; ?>">
                        </div>
                      <label for="harga_beli" class="labelfrm">Harga Beli</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-money"></span></span>
                          <input id="harga_beli" class="form-control" type="text" placeholder="Harga Beli" name="harga_beli" required="true" autocomplete="off" onkeypress="return mungAngka(event)" value="<?php echo $View['harga_beli']; ?>">
                        </div>
                      <label for="tgl_beli" class="labelfrm">Tanggal Beli</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input id="tgl_beli" class="form-control" type="date" name="tgl_beli" required="true" autocomplete="off" value="<?php echo $View['tgl_beli']; ?>">
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

