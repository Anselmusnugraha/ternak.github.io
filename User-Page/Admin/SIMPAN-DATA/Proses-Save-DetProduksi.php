<?php
  include '../../../Controller/koneksi.php';
/*Detail Produksi Telur*/
$ID_DETPRO=$_POST['id_detproduksi'];
$ID_PRO=$_POST['id_produksi'];
$TGL=$_POST['tgl_produksi'];
$JML_TLR=$_POST['jumlah_produksi'];
$KET=$_POST['keterangan'];

	if (empty($ID_DETPRO)){ 
	echo "<script>alert('Id Detail Produksi Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Det-Produksi.php'>"; }
	elseif (empty($ID_PRO)) {
	echo "<script>alert('Id Produksi Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Det-Produksi.php'>";}
	elseif (empty($JML_TLR)) {
	echo "<script>alert('Jumlah Telur belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Det-Produksi.php'>";}
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal Produksi belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Det-Produksi.php'>";}
	else{
	$cekTGLsama= "select * from det_produksi where tgl_produksi='$_POST[tgl_produksi]'";
	$prosescek = mysql_query($cekTGLsama);
		if (mysql_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
    	echo "<script>alert('Tanggal Sudah Diinput!!!');history.go(-1) </script>";}
		else{
		/*Proses Insert data Detail Produksi*/
		$sql="insert into det_produksi values ('$ID_DETPRO','$ID_PRO','$TGL','$JML_TLR','$KET')";
		$query=mysql_query($sql);

		/*Proses Menghitung jumlah produksi telur harian untuk ditotal jumlahnya*/
		$sql1="select * from produksi where id_produksi='$ID_PRO'";
		$query1=mysql_query($sql1);
		$Tampil=mysql_fetch_array($query1);
		$TOT_PROD=$Tampil['total_produksi'];

		$UP_TOTPROD=$TOT_PROD+$JML_TLR;

		/*Proses Merata-rata data jumlah produksi pada tabel det_produksi*/
		$sql2="select AVG(jumlah_produksi) as rata_pro from det_produksi where id_produksi='$ID_PRO'";
		$query2=mysql_query($sql2);
		$View=mysql_fetch_array($query2);
		$AVG_JMLPRO=$View['rata_pro']; 

		/*Proses Update data total produksi dan rata produksi pada tabel produksi*/
		$sql3="update produksi SET total_produksi='$UP_TOTPROD', rata_produksi='$AVG_JMLPRO' where id_produksi='$ID_PRO'";
		$query3=mysql_query($sql3);

		if ($query3){
			header('location:../Det-Produksi.php?id_produksi='.$ID_PRO.'');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
}
?>