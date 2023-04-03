<?php
	include "../../../Controller/koneksi.php";
$ID_PAKAN=$_GET['id_pakan'];

$sql="delete from hit_pakan where id_pakan='$ID_PAKAN'";
$query=mysql_query($sql);

if($query){		
header('location:../Pakan-Margin.php');
	}else{
		
echo "Data Gagal Dihapus!";
	}

?>