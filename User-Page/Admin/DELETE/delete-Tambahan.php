<?php
	include "../../../Controller/koneksi.php";
$ID_PMSK=$_GET['id_pemasukkan'];

$sql="select * from pemasukkan_lain where id_pemasukkan='$ID_PMSK'";
$query=mysql_query($sql);
$Tampil=mysql_fetch_array($query);
$TOTAL_MODAL=$Tampil['total'];

$sql1="select * from profit";
$query1=mysql_query($sql1);
$Tampil1=mysql_fetch_array($query1);
$ID_PROFIT=$Tampil1['id_profit'];
$MODAL=$Tampil1['total_modalOut'];
$PJL=$Tampil1['total_PenjualanTelur'];

$UPPJL=$PJL-$TOTAL_MODAL;
$UNTUNG=$UPPJL-$MODAL;

$sql2="delete from pemasukkan_lain where id_pemasukkan='$ID_PMSK'";
$query2=mysql_query($sql2);

$sql3="update profit SET total_PenjualanTelur='$UPPJL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
$query3=mysql_query($sql3);

if($query3){		
header('location:../Tambahan.php');
	}else{
		
echo "Data Gagal Dihapus!";
	}

?>