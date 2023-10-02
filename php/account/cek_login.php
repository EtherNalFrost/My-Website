<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="owner"){
 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "owner";
		header("location:../homepage.php");
	}elseif ($data['level']=="") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "";
		header("location:../homepage.php");
	}else{
		header("location:login.php?pesan=gagal");
	}
}else{
	header("location:login.php?pesan=gagal");
}
 
?>