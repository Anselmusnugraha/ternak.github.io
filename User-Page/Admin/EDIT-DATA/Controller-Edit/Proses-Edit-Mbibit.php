<?php
	include '../../../../Controller/koneksi.php';
	
	/*Edit Modal Bibit*/
	$ID_PROFIT=1;
	$ID_MBIBIT=$_POST['id_mbibit'];
	$TOTAL_BEFORE=$_POST['total_MODAL'];
	$NAMA=$_POST['nama'];
	$POPULASI=$_POST['populasi'];
	$HARGA=$_POST['harga'];
	$TGL=$_POST['tgl_bibit'];
	$NEW_TOTAL=$POPULASI*$HARGA;

	if (empty($ID_MBIBIT)){ 
	echo "<script>alert('Id Modal Bibit Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Bibit.php'>"; }
	elseif (empty($TOTAL_BEFORE)) {
	echo "<script>alert('Total Modal Sebelumnya kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Bibit.php'>";}
	elseif (empty($NAMA)) {
	echo "<script>alert('Nama belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Bibit.php'>";}
	elseif (empty($POPULASI)) {
	echo "<script>alert('Jumlah Populasi belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Bibit.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Bibit.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Bibit.php'>";}
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
		$sql2="update m_bibit SET nama='$NAMA', populasi='$POPULASI', harga='$HARGA', tgl_bibit='$TGL', total_Mbibit='$NEW_TOTAL' where id_mbibit='$ID_MBIBIT'";
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
			header('location:../../M-Bibit.php');
		}else{
			echo "Data Gagal Diubah !";
		}
	}
 ?>