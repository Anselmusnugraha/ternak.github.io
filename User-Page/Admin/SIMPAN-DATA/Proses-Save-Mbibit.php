<?php
  include '../../../Controller/koneksi.php';
/*Modal Bibit*/
$ID_MBIBIT=$_POST['id_mbibit'];
$ID_PROFIT=1;
$NAMA=$_POST['nama'];
$POPULASI=$_POST['populasi'];
$HARGA=$_POST['harga'];
$TGL=$_POST['tgl_bibit'];
$TOTAL=$POPULASI*$HARGA;

	if (empty($ID_MBIBIT)){ 
	echo "<script>alert('Id Modal Bibit Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Bibit.php'>"; }
	elseif (empty($NAMA)) {
	echo "<script>alert('Nama belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Bibit.php'>";}
	elseif (empty($POPULASI)) {
	echo "<script>alert('Jumlah Populasi belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Bibit.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga Bibit belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Bibit.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Bibit.php'>";}
	else{
		$sql="insert into m_bibit values ('$ID_MBIBIT','$ID_PROFIT','$NAMA','$POPULASI', '$HARGA', '$TGL','$TOTAL')";
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
			header('location:../M-Bibit.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>