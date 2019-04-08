<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:admin/index.php");

	}else if($data['level']=="kasir"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "kasir";
		header("location:kasir/index.php");

	}else if($data['level']=="waiter"){
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "waiter";
		header("location:waiter/index.php");

	}else if($data['level']=="owner"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "owner";
		header("location:owner/index.php");

	}else{

		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>