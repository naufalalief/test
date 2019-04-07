<?php
	error_reporting(0);
	//KONEKSI PHP MYSQL
	$database="restoran";
	$host="localhost";
	$username="root";
	$password="";

	$conn = mysql_connect ($host,$username,$password) or die ("koneksi gagal");
	mysql_select_db ($database, $conn);

	if ($_POST["simpan"]) {
		$id_pelanggan=$_POST["id_pelanggan"];
		$nama_pelanggan=$_POST["nama_pelanggan"];
		$jenis_kelamin=$_POST["jenis_kelamin"];
		$no_hp=$_POST["no_hp"];
		$alamat=$_POST["alamat"];

		$s = "insert into pelanggan (id_pelanggan, nama_pelanggan, jenis_kelamin, no_hp, alamat) values ('$id_pelanggan', '$nama_pelanggan', '$jenis_kelamin', '$no_hp', '$alamat')";

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
			ID </td><td> : </td><td><input type="text" name="id_pelanggan" id="id_pelanggan"><br>
		</td>
	</tr>
	<tr>
		<td>
			Nama </td><td> : </td><td><input type="text" name="nama_pelanggan"><br>
		</td>
	</tr>
	<tr>
		<td>
			Jenis Kelamin </td><td> : </td><td>
				<select name="jenis_kelamin" id="jenis_kelamin">
				<option selected="selected">Pilih </option>
				<option value="1">Lanang</option>
				<option value="0">Wedok</option>
				</select><br>
		</td>
	</tr>
	<tr>
		<td>
			No HP </td><td> : </td><td><input type="text" name="no_hp"><br>
		</td>
	</tr>
	<tr>
		<td>
			Alamat </td><td> : </td><td><input type="text" name="alamat"><br>
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