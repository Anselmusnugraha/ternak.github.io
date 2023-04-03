<?php
	include "../../../Controller/koneksi.php";
$ID_PRO=$_GET['id_produksi'];

$sql="delete from produksi where id_produksi='$ID_PRO'";
$query=mysql_query($sql);

if($query){		
header('location:../Produksi.php');
	}else{
		
echo "Data Gagal Dihapus!";
	}

?>