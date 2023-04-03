<?php
	include '../../../../Controller/koneksi.php';
	
/*Edit Produksi*/
$ID_PRO=$_POST['id_produksi'];
$KANDANG=$_POST['kandang'];
$TGL=$_POST['tgl_masuk_kandang'];
$KET=$_POST['keterangan'];

	if (empty($ID_PRO)){ 
	echo "<script>alert('Id Produksi Telur Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Produksi.php'>"; }
	elseif (empty($KANDANG)) {
	echo "<script>alert('Kandang belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Produksi.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal Masuk Kandang belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Produksi.php'>";}
	else{
		/*Proses update produksi*/
		$sql="update produksi SET kandang='$KANDANG', tgl_masuk_kandang='$TGL', keterangan='$KET' where id_produksi='$ID_PRO'";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../../Produksi.php');
		}else{
			echo "Data Gagal Diubah !";
		}
	}
 ?>