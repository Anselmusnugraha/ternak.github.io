<?php
	include "../../../Controller/koneksi.php";
$ID_CS=$_GET['id_customer'];

$sql="delete from customer where id_customer='$ID_CS'";
$query=mysql_query($sql);

if($query){		
header('location:../Pelanggan.php');
	}else{
		
echo "Data Gagal Dihapus!";
	}

?>