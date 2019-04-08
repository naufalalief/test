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
	<title>Admin</title>
	<style type="text/css">
		button{
			width: 100px;
			height: 50px;
		}
	</style>
</head>
<body>
<table>
	<tr>
		<td colspan="4">
			<Center>Halo, <b><?php echo $_SESSION['username']; ?></b>. Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b></Center>
		</td>
	</tr>
	<tr>
		<td>
			<a href="en_meja.php"><button>Tambah Pelanggan</button></a>
		</td>
		<td>
			<a href="list.php"><button>List Pelanggan</button></a></br>
		</td>
		<td>
			<a href="en_menu.php"><button>Tambah Menu</button></a>
		</td>
		<td>
			<a href="listm.php"><button>List Menu</button></a></br>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<a href="logout.php"><center><button>LOGOUT</button></center></a>
		</td>
	</tr>
</table>
</body>
</html>