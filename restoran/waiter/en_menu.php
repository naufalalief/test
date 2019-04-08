<?php

	//KONEKSI PHP MYSQL
	$database="restoran";
	$host="localhost";
	$username="root";
	$password="";

	$conn = mysql_connect ($host,$username,$password) or die ("koneksi gagal");
	mysql_select_db ($database, $conn);

	if ($_POST["simpan"]) {
		$id_menu=$_POST["id_menu"];
		$nama_menu=$_POST["nama_menu"];
		$harga=$_POST["harga"];

		$s = "insert into menu (id_menu, nama_menu, harga) values ('$id_menu', '$nama_menu', '$harga')";

		$q = mysql_query($s);

		header("location:index.php");

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pelanggan</title>
</head>
<body>
<table>
<form method="post" action="">	
	<tr>
		<td>
			ID </td><td> : </td><td><input type="text" name="id_menu" id="id_menu"><br>
		</td>
	</tr>
	<tr>
		<td>
			Nama Menu </td><td> : </td><td><input type="text" name="nama_menu"><br>
		</td>
	</tr>
	<tr>
		<td>
			Harga </td><td> : </td><td><input type="text" name="harga"><br>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="simpan" value="simpan">
		</td>
	</tr>
</form>
	<tr>
		<td>
			<a href="index.php">Mbalek</a>
		</td>
	</tr>
</table>
</body>
</html>