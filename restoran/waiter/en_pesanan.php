<?php
	session_start();
	//KONEKSI PHP MYSQL
	$database="restoran";
	$host="localhost";
	$username="root";
	$password="";

	$conn = mysql_connect ($host,$username,$password) or die ("koneksi gagal");
	mysql_select_db ($database, $conn);

	if ($_POST["simpan"]) {
		$id_pesanan=$_POST["id_pesanan"];
		$id_menu=$_POST["id_menu"];
		$id_pelanggan=$_POST["id_pelanggan"];
		$jumlah=$_POST["jumlah"];
		$id_user=$_SESSION['id_user'];

		$s = "insert into pesanan (id_pesanan, id_menu, id_pelanggan, jumlah, id_user) values ('$id_pesanan', '$id_menu', '$id_pelanggan', '$jumlah', '$id_user')";

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
	<?php
	$perintah="select * from menu";
	$query= mysql_query($perintah,$conn);
	?>
	<?php
	$perintah="select * from pelanggan";
	$query2= mysql_query($perintah,$conn);
	?>
	<?php
	$perintah="select * from login";
	$query3= mysql_query($perintah,$conn);
	?>
<table>
<form method="post" action="">	
	<tr>
		<td>
			ID </td><td> : </td><td><input type="text" name="id_pesanan" id="id_pesanan"><br>
		</td>
	</tr>
	<tr>
		<td>
			Nama Menu </td><td> : </td><td>				
				<select name="id_menu" id="id_menu">
				<option selected="selected">Pilih </option>
				<?php while($wew=mysql_fetch_array($query)){?>
				<option value="<?php echo $wew['id_menu'];?>">
				<?php echo $wew['nama_menu'];?></option>
				<?php } ?>
				</select>
		</td>
	</tr>
	<tr>
		<td>
			Pelanggan </td><td> : </td><td>				
				<select name="id_pelanggan" id="id_pelanggan">
				<option selected="selected">Pilih </option>
				<?php while($wew=mysql_fetch_array($query2)){?>
				<option value="<?php echo $wew['id_pelanggan'];?>">
				<?php echo $wew['nama_pelanggan'];?></option>
				<?php } ?>
				</select>
		</td>
	</tr>
	<tr>
		<td>
			Jumlah </td><td> : </td><td><input type="text" name="jumlah">
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