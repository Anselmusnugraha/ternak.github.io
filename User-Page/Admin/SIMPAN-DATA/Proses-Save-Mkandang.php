<?php
  include '../../../Controller/koneksi.php';
/*Modal Kandang*/
$ID_MKANDANG=$_POST['id_mkandang'];
$ID_PROFIT=1;
$KETBAR=$_POST['ket_barang'];
$JUMLAH=$_POST['jumlah'];
$HARGA=$_POST['harga_beli'];
$TGL=$_POST['tgl_beli'];
$KET=$_POST['keterangan'];
$TOTAL=$JUMLAH*$HARGA;

	if (empty($ID_MKANDANG)){ 
	echo "<script>alert('Id Modal Kandang Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Kandang.php'>"; }
	elseif (empty($KETBAR)) {
	echo "<script>alert('Keterangan Barang belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Kandang.php'>";}
	elseif (empty($JUMLAH)) {
	echo "<script>alert('Jumlah belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Kandang.php'>";}
	elseif (empty($HARGA)) {
	echo "<script>alert('Harga belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../M-Kandang.php'>";}
	else{
		$sql="insert into m_kandang values ('$ID_MKANDANG','$ID_PROFIT','$KETBAR','$JUMLAH', '$HARGA', '$TGL','$KET','$TOTAL')";
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
			header('location:../M-Kandang.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>