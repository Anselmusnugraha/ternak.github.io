<?php
	include "../../../Controller/koneksi.php";
$ID_PJL=$_GET['id_penjualan'];

$sql="select * from penjualan_telur where id_penjualan='$ID_PJL'";
$query=mysql_query($sql);
$Tampil=mysql_fetch_array($query);
$TOTAL_PJL=$Tampil['pembayaran'];

$sql1="select * from profit";
$query1=mysql_query($sql1);
$Tampil1=mysql_fetch_array($query1);
$ID_PROFIT=$Tampil1['id_profit'];
$MODAL=$Tampil1['total_modalOut'];
$PJL=$Tampil1['total_PenjualanTelur'];

$UPPJL=$PJL-$TOTAL_PJL;
$UNTUNG=$UPPJL-$MODAL;

$sql2="delete from penjualan_telur where id_penjualan='$ID_PJL'";
$query2=mysql_query($sql2);

$sql3="update profit SET total_PenjualanTelur='$UPPJL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
$query3=mysql_query($sql3);

if($query3){		
header('location:../Penjualan.php');
	}else{
		
echo "Data Gagal Dihapus!";
	}

?>