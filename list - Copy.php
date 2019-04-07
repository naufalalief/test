<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<table border="2">
		<th>ID</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>No HP</th>
		<th>Alamat</th>
		<th colspan="2">Lain</th>
	<tr>
		<?php
			include 'koneksi.php';
			$query = "select * from pelanggan";
			$sql = mysql_query($query);
			$total = mysql_num_rows($sql);
			while($hasil = mysql_fetch_assoc($sql)){
		?>
        	<tr>
        	<td><center><?= $hasil['id_pelanggan']?></center></td>
        	<td><center><?= $hasil['nama_pelanggan']?></center></td>
        	<td><center><?= $hasil['jenis_kelamin']== '1' ? 'Lanang' : 'Wedok' ?></center></td>
        	<td><center><?= $hasil['no_hp']?></center></td>
        	<td><center><?= $hasil['alamat']?></center></td>
        	<td><center><a href='delete.php?id_pelanggan= <?php echo $hasil["id_pelanggan"] ?>'><button class="btn">Delete</button></a></center></td>
        	<td><center><a href='edit.php?id_pelanggan= <?php echo $hasil["id_pelanggan"] ?>'><button class="btn">Edit</button></a></center></td>
			</tr>
<?php
    }
    ?>
	</tr>
	<tr>
		<td colspan="7" align="center"><a href="index.php"><button>Mbalek</button></a></td>
	</tr>
	</table>
</body>
</html>