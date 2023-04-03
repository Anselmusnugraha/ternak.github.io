<?php
	include('../../../Controller/koneksi.php');
	echo "<br/>";
/*Hitung Pakan*/
$ID_PAKAN=$_POST['id_pakan'];
$NAMA=$_POST['Nama'];

$HR_PJ=$_POST['hr_pj'];
$QTY_PJ=$_POST['qty_pj'];
$HRG_PJ=$HR_PJ/$QTY_PJ;

$HR_KONS=$_POST['hr_kons'];
$QTY_KONS=$_POST['qty_kons'];
$HRG_KONS=$HR_KONS/$QTY_KONS;

$HR_TMB1=$_POST['hr_tmb1'];
$QTY_TMB1=$_POST['qty_tmb1'];
if ($QTY_TMB1==0) {
	$HRG_TMB1=$HR_TMB1/1;
}else{
	$HRG_TMB1=$HR_TMB1/$QTY_TMB1;
}

$HR_TMB2=$_POST['hr_tmb2'];
$QTY_TMB2=$_POST['qty_tmb2'];
if ($QTY_TMB2==0) {
	$HRG_TMB2=$HR_TMB2/1;
}else{
	$HRG_TMB2=$HR_TMB2/$QTY_TMB2;	
}

$POPULASI=$_POST['Populasi'];
$KEB_PAKAN=$_POST['Keb_pakan'];

$KOMP_PJ=$_POST['komp_pj'];
$KOMP_KONS=$_POST['komp_kons'];
$KOMP_TMB1=$_POST['komp_tmb1'];
$KOMP_TMB2=$_POST['komp_tmb2'];
$CATAT=$_POST['catatan'];

/*Format Angka Desimal Pakan Tambahan 1, dan Pakan Tambahan 2.*/
$DEC_KOMP_TMB1=number_format((float)$KOMP_TMB1, 3, ".", "");
$DEC_KOMP_TMB2=number_format((float)$KOMP_TMB2, 3, ".", "");

$KDR_PJ=($KOMP_PJ/100)*$KEB_PAKAN;
$KDR_KONS=($KOMP_KONS/100)*$KEB_PAKAN;

/*Rumus Mencari harga PJ, Konsentrat, Pakan Tambahan 1, dan Pakan Tambahan 2 sesuai Kebutuhan Pakan 
(HARGA_PJ + HARGA_KONSENTRAT) - HARGA_TAMBAHAN_1 - HARGA_TAMBAHAN_2 */
$TOT_PJ=$KDR_PJ*$HRG_PJ;
$TOT_KONS=$KDR_KONS*$HRG_KONS;
$TOT_PJ_TAMBAH_KONS=$TOT_PJ+$TOT_KONS;

$TOT_TMB1=$DEC_KOMP_TMB1*$HRG_TMB1;
$TOT_TMB2=$DEC_KOMP_TMB2*$HRG_TMB2;
$HRG_TOTAL=$TOT_PJ_TAMBAH_KONS-$TOT_TMB1-$TOT_TMB2;
$HRG_FINAL_PAKAN=$HRG_TOTAL/$KEB_PAKAN;


	if (empty($ID_PAKAN)){ 
	echo "<script>alert('Id Pakan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Pakan-Margin.php'>"; }
	elseif (empty($NAMA)) {
	echo "<script>alert('Tanggal Penjualan belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Pakan-Margin.php'>";}
	elseif (empty($HRG_PJ)){
	echo "<script>alert('Harga PJ/Katul Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Pakan-Margin.php'>";}
	elseif (empty($HRG_KONS)){
	echo "<script>alert('Harga Konsentrat Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Pakan-Margin.php'>";}
	elseif (empty($POPULASI)){
	echo "<script>alert('Jumlah Populasi Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Pakan-Margin.php'>";}
	elseif (empty($KEB_PAKAN)){
	echo "<script>alert('Kebutuhan Pakan Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Pakan-Margin.php'>";}
	elseif (empty($KOMP_PJ)){
	echo "<script>alert('Komposisi Pakan PJ/Katul Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Pakan-Margin.php'>";}
	elseif (empty($KOMP_KONS)){
	echo "<script>alert('Komposisi Konsentrat Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../Pakan-Margin.php'>";}
	else{

		$sql="insert into hit_pakan values ('$ID_PAKAN','$NAMA','$POPULASI','$KEB_PAKAN','$HRG_PJ','$HRG_KONS','$HRG_TMB1','$HRG_TMB2','$KOMP_PJ','$KOMP_KONS','$DEC_KOMP_TMB1','$DEC_KOMP_TMB2','$HRG_FINAL_PAKAN','$CATAT')";
		$query=mysql_query($sql);
		}
		if ($query) {
			header('location:../Pakan-Margin.php');
			/*
			echo "Kadar PJ : ";
			echo $KDR_PJ;
			echo "<br>";
			echo "Kadar Konsentrat : ";
			echo $KDR_KONS;
			echo "<br>";
			echo "Kadar Tambahan 1 : ";
			echo $DEC_KOMP_TMB1;
			echo "<br>";
			echo "Kadar Tambahan 2 : ";
			echo $DEC_KOMP_TMB2;
			echo "<br>";
			echo "Harga PJ Sesuai Kadar : ";
			echo $TOT_PJ;
			echo "<br>";
			echo "Harga Konsentrat Sesuai Kadar : ";
			echo $TOT_KONS;
			echo "<br>";
			echo "Harga Bahan Tambahan 1 :";
			echo $TOT_TMB1;
			echo "<br>";
			echo "Harga Bahan Tambahan 2 :";
			echo $TOT_TMB2;
			echo "<br>";
			echo "Harga PJ+Konsentrat : ";
			echo $TOT_PJ_TAMBAH_KONS;
			echo "<br>";
			echo "Harga Total :";
			echo $HRG_TOTAL;
			echo "<br>";
			echo "Harga Pakan /Kg :";
			echo $HRG_FINAL_PAKAN; */
		}else{
			echo "Data Gagal Disimpan !";
		}
?>