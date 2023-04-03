<?php
	include "../../../Controller/koneksi.php";
	$ID_USER=$_GET['id_user'];

	$role = mysql_query("select * from user where id_user='$ID_USER'");
	$cek = mysql_fetch_assoc($role);

		if ($cek['username']==admin) {
			echo "<script>alert('Admin tidak bisa di hapus!!!')</script>";
	        echo "<meta http-equiv='refresh' content='1 url=../User.php'>";
		}elseif ($cek['password']==admin) {
			echo "<script>alert('Admin tidak bisa di hapus!!!')</script>";
	        echo "<meta http-equiv='refresh' content='1 url=../User.php'>";
		}else{
			$sql=mysql_query("Delete FROM user WHERE id_user='$ID_USER'");
			header('location:../User.php'); 			
		}

?>