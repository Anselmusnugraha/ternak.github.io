<?php
	include "../../../Controller/koneksi.php";
$ID_KRY=$_GET['id_kry'];

$sql="select * from gj_karyawan where id_kry='$ID_KRY'";
$query=mysql_query($sql);
$Tampil=mysql_fetch_array($query);
$GAJI=$Tampil['gaji'];

$sql1="select * from profit";
$query1=mysql_query($sql1);
$Tampil1=mysql_fetch_array($query1);
$ID_PROFIT=$Tampil1['id_profit'];
$MODAL=$Tampil1['total_modalOut'];
$PJL=$Tampil1['total_PenjualanTelur'];

$UPMODAL=$MODAL-$GAJI;
$UNTUNG=$PJL-$UPMODAL;

$sql2="delete from gj_karyawan where id_kry='$ID_KRY'";
$query2=mysql_query($sql2);

$sql3="update profit SET total_modalOut='$UPMODAL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
$query3=mysql_query($sql3);

if($query3){		
header('location:../M-Gaji.php');
	}else{
		
echo "Data Gagal Dihapus!";
	}

?>