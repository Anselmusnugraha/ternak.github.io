<?php
  include '../../../../Controller/koneksi.php';

$ID_USER=$_POST['id_user'];
$USERNAME=$_POST['username'];
$PASSWORD=$_POST['password'];

    if (empty($ID_USER)){ 
	echo "<script>alert('Id User Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../User.php'>"; }
	elseif (empty($USERNAME)) {
	echo "<script>alert('Username belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../User.php'>";}
	elseif (empty($PASSWORD)) {
	echo "<script>alert('Password belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../User.php'>";}
	else{
		$sql="update user set username='$USERNAME', password='$PASSWORD' where id_user='$ID_USER'";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../../User.php');
		}else{
			echo "Data Gagal Disimpan !";
		}
	}
?>