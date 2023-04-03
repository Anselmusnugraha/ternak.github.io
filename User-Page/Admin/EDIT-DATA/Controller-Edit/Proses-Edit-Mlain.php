<?php
	include '../../../../Controller/koneksi.php';
	
/*Edit Modal Lain-lain*/
$ID_PROFIT=1;
$ID_MLAIN=$_POST['id_mlain'];
$TOTAL_BEFORE=$_POST['total_MODAL'];
$KETBAR=$_POST['ket_barang'];
$JUMLAH=$_POST['jumlah'];
$HARGA=$_POST['harga_beli'];
$TGL=$_POST['tgl_beli'];
$KET=$_POST['keterangan'];
$NEW_TOTAL=$JUMLAH*$HARGA;

	if (empty($ID_MLAIN)){ 
	echo "<script>alert('Id Modal lain-lain Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Other.php'>"; }
	elseif (empty($TOTAL_BEFORE)) {
	echo "<script>alert('Total Modal Sebelumnya Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Other.php'>";}
	elseif (empty($KETBAR)) {
	echo "<script>alert('Keterangan Barang belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Other.php'>";}
	elseif (empty($JUMLAH)) {
	echo "<script>alert('Jumlah belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Other.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Other.php'>";}
	else{
		$sql="select * from profit";
		$query=mysql_query($sql);
		$Tampil=mysql_fetch_array($query);
		$MODAL=$Tampil['total_modalOut'];
		$PJL=$Tampil['total_PenjualanTelur'];

		/*Trigger manual mengurangi total modal sebelumnya*/
		$UPMODAL=$MODAL-$TOTAL_BEFORE;
		$UNTUNG=$PJL-$UPMODAL;

		$sql1="update profit SET total_modalOut='$UPMODAL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
		$query1=mysql_query($sql1);

		/*Proses update modal pakan*/
		$sql2="update m_lain SET ket_barang='$KETBAR', jumlah='$JUMLAH', harga_beli='$HARGA', tgl_beli='$TGL', keterangan='$KET', total_Mlain='$NEW_TOTAL' where id_mlain='$ID_MLAIN'";
		$query2=mysql_query($sql2);

		/*Trigger manual menambah total modal dengan data yang sudah diupdate*/
		$sql3="select * from profit";
		$query3=mysql_query($sql3);
		$View=mysql_fetch_array($query3);
		$MODAL1=$View['total_modalOut'];
		$PJL1=$View['total_PenjualanTelur'];

		$UPMODAL1=$MODAL1+$NEW_TOTAL;
		$UNTUNGLAGI=$PJL1-$UPMODAL1;

		$sql4="update profit SET total_modalOut='$UPMODAL1', Keuntungan='$UNTUNGLAGI' where id_profit='$ID_PROFIT'";
		$query4=mysql_query($sql4);

		if ($query4) {
			header('location:../../M-Other.php');
		}else{
			echo "Data Gagal Diubah !";
		}
	}
 ?>