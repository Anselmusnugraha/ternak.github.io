<?php
  include '../../../Controller/koneksi.php';
/*Produksi Telur*/
$ID_PRO=$_POST['id_produksi'];
$KANDANG=$_POST['kandang'];
$TGL=$_POST['tgl_masuk_kandang'];
$TOTPRO=0;
$RATAPRO=0;
$KET=$_POST['keterangan'];

	if (empty($ID_PRO)){ 
	echo "<script>alert('Id Produksi Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Produksi.php'>"; }
	elseif (empty($KANDANG)) {
	echo "<script>alert('Kandang belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Produksi.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal masuk kandang belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Produksi.php'>";}
	else{
		$sql="insert into produksi values ('$ID_PRO','$KANDANG','$TGL','$TOTPRO','$RATAPRO', '$KET')";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../Produksi.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>