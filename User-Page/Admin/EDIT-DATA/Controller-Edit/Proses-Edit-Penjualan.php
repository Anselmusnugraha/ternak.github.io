<?php
	include '../../../../Controller/koneksi.php';
	
/*Penjualan Telur*/
$ID_PJL=$_POST['id_penjualan'];
$ID_PROFIT=1;
$PMBY_BEFORE=$_POST['TOT_PMBY'];
$TGL_JUAL=$_POST['tanggal_jual'];
$JML=$_POST['jml_telur'];
$HARGA=$_POST['harga_perbtr'];
$TOTAL=$JML*$HARGA;
$PEMBAYARAN=$_POST['pembayaran'];
$KET=$_POST['keterangan'];

	if (empty($ID_PJL)){ 
	echo "<script>alert('Id Penjualan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Penjualan.php'>";}
	elseif (empty($ID_PROFIT)) {
	echo "<script>alert('Id Profit Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Penjualan.php'>";}
	elseif (empty($PMBY_BEFORE)) {
	echo "<script>alert('Pembayaran Sebelumnya Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Penjualan.php'>";}
	elseif (empty($TGL_JUAL)) {
	echo "<script>alert('Tanggal Penjualan belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Penjualan.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga Telur belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Penjualan.php'>";}
	elseif (empty($JML)) {
	echo "<script>alert('Jumlah Telur belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../Penjualan.php'>";}
	else{
		$sql="select * from profit";
		$query=mysql_query($sql);
		$Tampil=mysql_fetch_array($query);
		$MODAL=$Tampil['total_modalOut'];
		$PJL=$Tampil['total_PenjualanTelur'];

		/*Trigger manual mengurangi total penjualan sebelumnya*/
		$UPPJL=$PJL-$PMBY_BEFORE;
		$UNTUNG=$UPPJL-$MODAL;

		$sql1="update profit SET total_PenjualanTelur='$UPPJL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
		$query1=mysql_query($sql1);

		/*Proses update pemasukkan_lain*/
		$sql2="update penjualan_telur SET tanggal_jual='$TGL_JUAL', jml_telur='$JML', harga_perbtr='$HARGA', total_pjl='$TOTAL', pembayaran='$PEMBAYARAN', keterangan='$KET' where id_penjualan='$ID_PJL'";
		$query2=mysql_query($sql2);

		/*Trigger manual menambah total penjualan dengan data yang sudah diupdate*/
		$sql3="select * from profit";
		$query3=mysql_query($sql3);
		$View=mysql_fetch_array($query3);
		$MODAL1=$View['total_modalOut'];
		$PJL1=$View['total_PenjualanTelur'];

		$UPPJL1=$PJL1+$PEMBAYARAN;
		$UNTUNGLAGI=$UPPJL1-$MODAL1;

		$sql4="update profit SET total_PenjualanTelur='$UPPJL1', Keuntungan='$UNTUNGLAGI' where id_profit='$ID_PROFIT'";
		$query4=mysql_query($sql4);

		if ($query4) {
			header('location:../../Penjualan.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
 ?>