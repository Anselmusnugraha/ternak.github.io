<?php
  include '../../../Controller/koneksi.php';
/*Modal Lain-lain*/
$ID_MLAIN=$_POST['id_mlain'];
$ID_PROFIT=1;
$KETBAR=$_POST['ket_barang'];
$JUMLAH=$_POST['jumlah'];
$HARGA=$_POST['harga_beli'];
$TGL=$_POST['tgl_beli'];
$KET=$_POST['keterangan'];
$TOTAL=$JUMLAH*$HARGA;

	if (empty($ID_MLAIN)){ 
	echo "<script>alert('Id Modal Lain-lain Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Other.php'>"; }
	elseif (empty($KETBAR)) {
	echo "<script>alert('Keterangan Barang belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Other.php'>";}
	elseif (empty($JUMLAH)) {
	echo "<script>alert('Jumlah belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Other.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Other.php'>";}
	else{
		$sql="insert into m_lain values ('$ID_MLAIN','$ID_PROFIT','$KETBAR','$JUMLAH', '$HARGA', '$TGL','$KET','$TOTAL')";
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
			header('location:../M-Other.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>