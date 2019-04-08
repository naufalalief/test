<?php
	
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
		$id_user=$_POST["id_user"];

		$s = mysql_query("UPDATE pesanan set id_pesanan = '$id_pesanan',id_menu = '$id_menu',id_pelanggan = '$id_pelanggan',jumlah = '$jumlah',id_user = '$id_user' where id_pesanan='$id_pesanan'");

		$q = mysql_query($s);

		header("location:listp.php");

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
			$s="select * from pesanan where id_pesanan = '".$_GET["id_pesanan"]."'";
			$q=mysql_query($s);
			$l=mysql_fetch_array($q);
			
			$k="select * from menu";
			$n=mysql_query($k);

			$t="select * from pelanggan";
			$p=mysql_query($t);

			$i="select * from login where id_user = '".$l['id_user']."'";
			$u=mysql_query($i);
			$qq=mysql_fetch_array($u);
		?>
<form method="post" action="">	
	<tr>
		<td>
			ID </td><td> : </td><td><input type="text" name="id_pesanan" value="<?= $l['id_pesanan'] ?>" readonly><br>
		</td>
	</tr>
	<tr>
		<td>
			Nama Menu </td><td> : </td><td>
				<select name="id_menu" id="id_menu">
				<?php while($data=mysql_fetch_array($n)){?>
				<option value="<?php echo $data['id_menu'];?>" <?php if ($data['id_menu'] == $l['id_menu']) { echo 'selected'; } ?>>
				<?php echo $data['nama_menu'];?></option>
				<?php } ?>
				</select><br>
		</td>
	</tr>
	<tr>
		<td>
			Nama Pelanggan </td><td> : </td><td>
				<select name="id_pelanggan" id="id_pelanggan" >
				<?php while($data=mysql_fetch_array($p)){?>
				<option value="<?php echo $data['id_pelanggan'];?>" <?php if ($data['id_pelanggan'] == $l['id_pelanggan']) { echo 'selected'; } ?>>
				<?php echo $data['nama_pelanggan'];?></option>
				<?php } ?>
				</select></br>
		</td>
	</tr>
	<tr>
		<td>
			Jumlah </td><td> : </td><td><input type="text" name="jumlah" value="<?= $l['jumlah'] ?>"><br>
		</td>
	</tr>
	<tr>
		<td>
			User </td><td> : </td><td><input type="text" name="id_user" value="<?= $qq['id_user'] ?>"><br>
		</td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" name="simpan" value="Simpan"></td>
	</tr>
</form>
	<tr>
		<td>
			<a href="listp.php">Mbalek</a>
		</td>
	</tr>
</table>
</body>
</html>