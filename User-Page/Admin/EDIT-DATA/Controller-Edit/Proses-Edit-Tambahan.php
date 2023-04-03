<?php
	include '../../../../Controller/koneksi.php';
	
/*Edit Pemasukkan Tambahan*/
$ID_PROFIT=1;
$ID_PMSK=$_POST['id_pemasukkan'];
$TOTAL_BEFORE=$_POST['total_PJL'];
$TGL=$_POST['tgl_masuk'];
$KET=$_POST['keterangan'];
$JML=$_POST['jumlah'];
$HARGA=$_POST['harga'];
$NEW_TOTAL=$JML*$HARGA;

	if (empty($ID_PMSK)){ 
	echo "<script>alert('Id Pemasukkan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Tambahan.php'>"; }
	elseif (empty($TOTAL_BEFORE)) {
	echo "<script>alert('Total Penjualan Sebelumnya kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Tambahan.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal Pemasukkan belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Tambahan.php'>";}
	elseif (empty($KET)) {
	echo "<script>alert('Keterangan belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Tambahan.php'>";}
	elseif (empty($JML)) {
	echo "<script>alert('Jumlah belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Tambahan.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Tambahan.php'>";}
	else{
		$sql="select * from profit";
		$query=mysql_query($sql);
		$Tampil=mysql_fetch_array($query);
		$MODAL=$Tampil['total_modalOut'];
		$PJL=$Tampil['total_PenjualanTelur'];

		/*Trigger manual mengurangi total penjualan sebelumnya*/
		$UPPJL=$PJL-$TOTAL_BEFORE;
		$UNTUNG=$UPPJL-$MODAL;

		$sql1="update profit SET total_PenjualanTelur='$UPPJL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
		$query1=mysql_query($sql1);

		/*Proses update pemasukkan_lain*/
		$sql2="update pemasukkan_lain SET keterangan='$KET', jumlah='$JML', harga='$HARGA', total='$NEW_TOTAL' where id_pemasukkan='$ID_PMSK'";
		$query2=mysql_query($sql2);

		/*Trigger manual menambah total penjualan dengan data yang sudah diupdate*/
		$sql3="select * from profit";
		$query3=mysql_query($sql3);
		$View=mysql_fetch_array($query3);
		$MODAL1=$View['total_modalOut'];
		$PJL1=$View['total_PenjualanTelur'];

		$UPPJL1=$PJL1+$NEW_TOTAL;
		$UNTUNGLAGI=$UPPJL1-$MODAL1;

		$sql4="update profit SET total_PenjualanTelur='$UPPJL1', Keuntungan='$UNTUNGLAGI' where id_profit='$ID_PROFIT'";
		$query4=mysql_query($sql4);

		if ($query4) {
			header('location:../../Tambahan.php');
		}else{
			echo "Data Gagal Diubah !";
		}
	}
 ?>