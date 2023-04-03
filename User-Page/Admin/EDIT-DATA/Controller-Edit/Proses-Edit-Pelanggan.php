<?php
	include '../../../../Controller/koneksi.php';
	
/*Edit Customer*/
$ID_CS=$_POST['id_customer'];
$NAMA=$_POST['nama'];
$ALAMAT=$_POST['alamat'];
$NO_TELP=$_POST['no_telp'];
$EMAIL=$_POST['email'];
$KET=$_POST['keterangan'];

	if (empty($ID_CS)){ 
	echo "<script>alert('Id Customer Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Pelanggan.php'>"; }
	elseif (empty($NAMA)) {
	echo "<script>alert('Nama belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Pelanggan.php'>";}
	else{

		$sql="update customer SET nama='$NAMA', alamat='$ALAMAT', no_telp='$NO_TELP', email='$EMAIL', keterangan='$KET' where id_customer='$ID_CS'";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../../Pelanggan.php');
		}else{
			echo "Data Gagal Diubah !";
		}
	}
 ?>