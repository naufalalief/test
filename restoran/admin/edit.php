<?php
	
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

		$s = mysql_query("UPDATE pelanggan set id_pelanggan = '$id_pelanggan',nama_pelanggan = '$nama_pelanggan',jenis_kelamin = '$jenis_kelamin',no_hp = '$no_hp',alamat = '$alamat' where id_pelanggan='$id_pelanggan'");

		$q = mysql_query($s);

		header("location:list.php");

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
			$s="select * from pelanggan where id_pelanggan='".$_GET["id_pelanggan"]."'";
			$q=mysql_query($s)or die(mysql_error());
			$l=mysql_fetch_array($q);
		?>
<form method="post" action="">	
	<tr>
		<td>
			ID </td><td> : </td><td><input type="text" name="id_pelanggan" value="<?= $l['id_pelanggan'] ?>" readonly><br>
		</td>
	</tr>
	<tr>
		<td>
			Nama </td><td> : </td><td><input type="text" name="nama_pelanggan" value="<?= $l['nama_pelanggan'] ?>"><br>
		</td>
	</tr>
	<tr>
		<td>
			Jenis Kelamin </td><td> : </td><td>
				<select name="jenis_kelamin" id="jenis_kelamin">
				<option value="1"
				<?= $l['jenis_kelamin'] == '1' ? 'selected' : ''?>
				>Lanang
				</option>
				<option value="0"
				<?= $l['jenis_kelamin'] == '0' ? 'selected' : ''?>
				>Wedok
				</option>
		</td>
	</tr>
	<tr>
		<td>
			No HP </td><td> : </td><td><input type="text" name="no_hp" value="<?= $l['no_hp'] ?>"><br>
		</td>
	</tr>
	<tr>
		<td>
			Alamat </td><td> : </td><td><input type="text" name="alamat" value="<?= $l['alamat'] ?>"><br>
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