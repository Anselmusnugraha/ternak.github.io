<?php
  include '../../../Controller/koneksi.php';
/*Pemasukkan Tambahan*/
$ID_PMSK=$_POST['id_pemasukkan'];
$ID_PROFIT=1;
$TGL=$_POST['tgl_masuk'];
$KET=$_POST['keterangan'];
$JML=$_POST['jumlah'];
$HARGA=$_POST['harga'];
$TOTAL=$JML*$HARGA;

	if (empty($ID_PMSK)){ 
	echo "<script>alert('Id Pemasukkan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Tambahan.php'>"; }
	elseif (empty($ID_PROFIT)) {
	echo "<script>alert('Id Profit Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Tambahan.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal Pemasukkan belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Tambahan.php'>";}
	elseif (empty($KET)) {
	echo "<script>alert('Keterangan belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Tambahan.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Tambahan.php'>";}
	elseif (empty($JML)) {
	echo "<script>alert('Jumlah belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Tambahan.php'>";}
	else{
		$sql="insert into pemasukkan_lain values ('$ID_PMSK','$ID_PROFIT','$TGL','$KET','$JML','$HARGA','$TOTAL')";
		$query=mysql_query($sql);

		$sql1="select * from profit";
		$query1=mysql_query($sql1);
		$Tampil=mysql_fetch_array($query1);
		$MODAL=$Tampil['total_modalOut'];
		$PJL=$Tampil['total_PenjualanTelur'];

		$UPPJL=$PJL+$TOTAL;
		$UNTUNG=$UPPJL-$MODAL;

		$sql2="update profit SET total_PenjualanTelur='$UPPJL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
		$query2=mysql_query($sql2);

		if ($query2) {
			header('location:../Tambahan.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>