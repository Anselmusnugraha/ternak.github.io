<?php
  include '../../../Controller/koneksi.php';
/*Gaji Karyawan*/
$ID_KRY=$_POST['id_kry'];
$ID_PROFIT=1;
$NAMA=$_POST['nama_kry'];
$ALAMAT=$_POST['alamat'];
$NO_HP=$_POST['no_hp'];
$USIA=$_POST['usia'];
$GAJI=$_POST['gaji'];
$TGL=$_POST['tgl_gaji'];
$KET=$_POST['keterangan'];

	if (empty($ID_KRY)){ 
	echo "<script>alert('Id Karyawan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Gaji.php'>"; }
	elseif (empty($NAMA)) {
	echo "<script>alert('Nama belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Gaji.php'>";}
	elseif (empty($ALAMAT)) {
	echo "<script>alert('Alamat belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Gaji.php'>";}
	elseif (empty($GAJI)) {
	echo "<script>alert('Gaji belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Gaji.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal Gaji belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Gaji.php'>";}
	else{
		$sql="insert into gj_karyawan values ('$ID_KRY','$ID_PROFIT','$NAMA','$ALAMAT','$NO_HP','$USIA','$GAJI','$TGL','$KET')";
		$query=mysql_query($sql);

		$sql1="select * from profit";
		$query1=mysql_query($sql1);
		$Tampil=mysql_fetch_array($query1);
		$MODAL=$Tampil['total_modalOut'];
		$PJL=$Tampil['total_PenjualanTelur'];

		$UPMODAL=$MODAL+$GAJI;
		$UNTUNG=$PJL-$UPMODAL;

		$sql2="update profit SET total_modalOut='$UPMODAL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
		$query2=mysql_query($sql2);

		if ($query2) {
			header('location:../M-Gaji.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>