<?php 
include "koneksi.php"; 
$USER = $_POST['username']; 
$PASS = $_POST['password'];

if(empty($USER)){ 
	echo "<script>alert('Username belum diisi')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../index.html'>"; }
elseif(empty($PASS)){ 
	echo "<script>alert('Password belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=../index.html'>"; }
else{ 
	session_start(); 
	$login = mysql_query("select * from user where username='$USER' and password='$PASS'"); 
			if (mysql_num_rows($login) == 0){
				 echo "<script>alert('Username atau Password salah!!')</script>"; 
				 echo "<meta http-equiv='refresh' content='1 url=../index.html'>";}
				else{ 
					$row = mysql_fetch_assoc($login);
						
						if($row['hak_akses'] == 0){
							$_SESSION['username']=$USER;
							$_SESSION['hak_akses']='Admin';
							$_SESSION['id_user'] = $row['id_user'];
							header("Location: ../User-Page/Admin/Admin-Index.php");
						}else if($row['hak_akses'] == 1){
							$_SESSION['username']=$USER;
							$_SESSION['hak_akses']='Pimpinan';
							$_SESSION['id_user'] = $row['id_user'];
							header("Location: ../User-Page/MoreUser/Index-MorUser.php");
						}else{
							echo "<script>alert('Hak Akses kosong!')</script>"; 
				            echo "<meta http-equiv='refresh' content='1 url=../index.html'>";} 
					}
			}
?>