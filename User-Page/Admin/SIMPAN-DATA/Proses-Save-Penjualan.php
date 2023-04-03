<?php
  include '../../../Controller/koneksi.php';
/*Penjualan Telur*/
$ID_PJL=$_POST['id_penjualan'];
$ID_PROFIT=1;
$ID_CS=$_POST['id_customer'];
$TGL_JUAL=$_POST['tanggal_jual'];
$JML=$_POST['jml_telur'];
$HARGA=$_POST['harga_perbtr'];
$TOTAL=$JML*$HARGA;
$PEMBAYARAN=$_POST['pembayaran'];
$KET=$_POST['keterangan'];

	if (empty($ID_PJL)){ 
	echo "<script>alert('Id Penjualan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Penjualan.php'>";}
	elseif (empty($ID_PROFIT)) {
	echo "<script>alert('Id Profit Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Penjualan.php'>";}
	elseif (empty($ID_CS)) {
	echo "<script>alert('Id Customer Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Penjualan.php'>";}
	elseif (empty($TGL_JUAL)) {
	echo "<script>alert('Tanggal Penjualan belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Penjualan.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga Telur belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Penjualan.php'>";}
	elseif (empty($JML)) {
	echo "<script>alert('Jumlah Telur belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Penjualan.php'>";}
	else{
		$sql="insert into penjualan_telur values ('$ID_PJL','$ID_PROFIT','$ID_CS','$TGL_JUAL','$JML','$HARGA','$TOTAL','$PEMBAYARAN','$KET')";
		$query=mysql_query($sql);

		$sql1="select * from profit";
		$query1=mysql_query($sql1);
		$Tampil=mysql_fetch_array($query1);
		$MODAL=$Tampil['total_modalOut'];
		$PJL=$Tampil['total_PenjualanTelur'];

		$UPPJL=$PJL+$PEMBAYARAN;
		$UNTUNG=$UPPJL-$MODAL;

		$sql2="update profit SET total_PenjualanTelur='$UPPJL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
		$query2=mysql_query($sql2);

		if ($query2) {
			header('location:../Penjualan.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>