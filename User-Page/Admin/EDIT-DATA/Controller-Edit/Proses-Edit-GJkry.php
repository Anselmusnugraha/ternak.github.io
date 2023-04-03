<?php
	include '../../../../Controller/koneksi.php';
	
/*Edit Gaji Karyawan*/
$ID_PROFIT=1;
$ID_KRY=$_POST['id_kry'];
$GAJI_BEFORE=$_POST['total_MODAL'];
$NAMA=$_POST['nama_kry'];
$ALAMAT=$_POST['alamat'];
$NO_HP=$_POST['no_hp'];
$USIA=$_POST['usia'];
$GAJI_NEW=$_POST['gaji'];
$TGL=$_POST['tgl_gaji'];
$KET=$_POST['keterangan'];

	if (empty($ID_KRY)){ 
	echo "<script>alert('Id Karyawan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Gaji.php'>"; }
	elseif (empty($GAJI_BEFORE)) {
	echo "<script>alert('Total Gaji Sebelumnya kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Gaji.php'>";}
	elseif (empty($NAMA)) {
	echo "<script>alert('Nama belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Gaji.php'>";}
	elseif (empty($ALAMAT)) {
	echo "<script>alert('Alamat belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Gaji.php'>";}
	elseif (empty($GAJI_NEW)) {
	echo "<script>alert('Gaji Karyawan belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Gaji.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal Gaji belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../M-Gaji.php'>";}
	else{
		$sql="select * from profit";
		$query=mysql_query($sql);
		$Tampil=mysql_fetch_array($query);
		$MODAL=$Tampil['total_modalOut'];
		$PJL=$Tampil['total_PenjualanTelur'];

		/*Trigger manual mengurangi total modal sebelumnya*/
		$UPMODAL=$MODAL-$GAJI_BEFORE;
		$UNTUNG=$PJL-$UPMODAL;

		$sql1="update profit SET total_modalOut='$UPMODAL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
		$query1=mysql_query($sql1);

		/*Proses update modal pakan*/
		$sql2="update gj_karyawan SET nama_kry='$NAMA', alamat='$ALAMAT', no_hp='$NO_HP', usia='$USIA', gaji='$GAJI_NEW', tgl_gaji='$TGL', keterangan='$KET' where id_kry='$ID_KRY'";
		$query2=mysql_query($sql2);

		/*Trigger manual menambah total modal dengan data yang sudah diupdate*/
		$sql3="select * from profit";
		$query3=mysql_query($sql3);
		$View=mysql_fetch_array($query3);
		$MODAL1=$View['total_modalOut'];
		$PJL1=$View['total_PenjualanTelur'];

		$UPMODAL1=$MODAL1+$GAJI_NEW;
		$UNTUNGLAGI=$PJL1-$UPMODAL1;

		$sql4="update profit SET total_modalOut='$UPMODAL1', Keuntungan='$UNTUNGLAGI' where id_profit='$ID_PROFIT'";
		$query4=mysql_query($sql4);

		if ($query4) {
			header('location:../../M-Gaji.php');
		}else{
			echo "Data Gagal Diubah !";
		}
	}
 ?>