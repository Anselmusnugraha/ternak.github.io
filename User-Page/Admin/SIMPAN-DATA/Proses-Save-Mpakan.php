<?php
  include '../../../Controller/koneksi.php';
/*Modal Pakan*/
$ID_MPAKAN=$_POST['id_mpakan'];
$ID_PROFIT=1;
$NAMA=$_POST['nama'];
$JUMLAH=$_POST['jumlah'];
$HARGA=$_POST['harga'];
$TGL=$_POST['tgl_beli'];
$KET=$_POST['keterangan'];
$TOTAL=$JUMLAH*$HARGA;

	if (empty($ID_MPAKAN)){ 
	echo "<script>alert('Id Modal Pakan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Pakan.php'>"; }
	elseif (empty($NAMA)) {
	echo "<script>alert('Nama belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Pakan.php'>";}
	elseif (empty($JUMLAH)) {
	echo "<script>alert('Jumlah belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Pakan.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga Pakan belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Pakan.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Pakan.php'>";}
	else{
		$sql="insert into m_pakan values ('$ID_MPAKAN','$ID_PROFIT','$NAMA','$JUMLAH', '$HARGA', '$TGL','$KET','$TOTAL')";
		$query=mysql_query($sql);

		$sql1="select * from profit";
		$query1=mysql_query($sql1);
		$Tampil=mysql_fetch_array($query1);
		$MODAL=$Tampil['total_modalOut'];
		$PJL=$Tampil['total_PenjualanTelur'];

		$UPMODAL=$MODAL+$TOTAL;
		$UNTUNG=$PJL-$UPMODAL;

		$sql2="update profit SET total_modalOut='$UPMODAL', Keuntungan='$UNTUNG' where id_profit='$ID_PROFIT'";
		$query2=mysql_query($sql2);

		if ($query2) {
			header('location:../M-Pakan.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>