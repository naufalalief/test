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

		$s = mysql_query("UPDATE menu set id_menu = '$id_menu',nama_menu = '$nama_menu',harga = '$harga' where id_menu='$id_menu'");

		$q = mysql_query($s);

		header("location:listm.php");

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pelanggan</title>
</head>
<body>
<table>
		<?php
			$s="select * from menu where id_menu='".$_GET["id_menu"]."'";
			$q=mysql_query($s)or die(mysql_error());
			$l=mysql_fetch_array($q);
		?>
<form method="post" action="">	
	<tr>
		<td>
			ID </td><td> : </td><td><input type="text" name="id_menu" value="<?= $l['id_menu'] ?>" readonly><br>
		</td>
	</tr>
	<tr>
		<td>
			Nama </td><td> : </td><td><input type="text" name="nama_menu" value="<?= $l['nama_menu'] ?>"><br>
		</td>
	</tr>
	<tr>
		<td>
			Harga </td><td> : </td><td><input type="text" name="harga" value="<?= $l['harga'] ?>"><br>
		</td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" name="simpan" value="Simpan"></td>
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