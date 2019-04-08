	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
<!DOCTYPE html>
<html>
<head>
	<title>K-Sir</title>
</head>
	<style type="text/css">
		button{
			width: 100px;
			height: 50px;
		}
	</style>
<body>
	<table>
	<tr>
		<td colspan="4">
			<Center>Halo, <b><?php echo $_SESSION['username']; ?></b>. Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>
		</td>
	</tr>
		<tr>
		<td>
			<a href="prosestrans.php"><button>Tambah Transaksi</button></a>
		</td>
		<td>
			<a href="listtrans.php"><button>List Transaksi</button></a></br>
		</td>
		<td>
			<a href="laporan1.php"><button>Generate Laporan</button></a>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<a href="logout.php"><center><button>LOGOUT</button></center></a>
		</td>
	</tr>
</body>
</html>