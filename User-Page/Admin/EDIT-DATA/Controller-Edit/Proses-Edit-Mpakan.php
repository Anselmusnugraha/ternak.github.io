<?php
	include '../../../../Controller/koneksi.php';
	
/*Edit Modal Pakan*/
$ID_PROFIT=1;
$ID_MPAKAN=$_POST['id_mpakan'];
$TOTAL_BEFORE=$_POST['total_MODAL'];
$NAMA=$_POST['nama'];
$JUMLAH=$_POST['jumlah'];
$HARGA=$_POST['harga'];
$TGL=$_POST['tgl_beli'];
$KET=$_POST['keterangan'];
$NEW_TOTAL=$JUMLAH*$HARGA;

	if (empty($ID_MPAKAN)){ 
	echo "<script>alert('Id Modal Pakan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Pakan.php'>"; }
	elseif (empty($TOTAL_BEFORE)) {
	echo "<script>alert('Total Modal Sebelumnya Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Pakan.php'>";}
	elseif (empty($NAMA)) {
	echo "<script>alert('Nama belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Pakan.php'>";}
	elseif (empty($JUMLAH)) {
	echo "<script>alert('Jumlah belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Pakan.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Pakan.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Pakan.php'>";}
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
		$sql2="update m_pakan SET nama='$NAMA', jumlah='$JUMLAH', harga='$HARGA', tgl_beli='$TGL', keterangan='$KET', total_Mpakan='$NEW_TOTAL' where id_mpakan='$ID_MPAKAN'";
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
			header('location:../../M-Pakan.php');
		}else{
			echo "Data Gagal Diubah !";
		}
	}
 ?>