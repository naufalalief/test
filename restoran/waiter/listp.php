<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<table border="2">
		<th>ID Pesanan</th>
		<th>Nama Menu</th>
		<th>Nama Pelanggan</th>
		<th>Jumlah</th>
		<th>Nama User</th>
		<th colspan="2">Lain</th>
	<tr>
		<?php
			include 'koneksi.php';
			$query = "select p.id_pesanan, m.nama_menu, pel.nama_pelanggan, p.jumlah, l.username from pesanan p, menu m, pelanggan pel, login l where p.id_user = l.id_user and p.id_menu = m.id_menu and p.id_pelanggan = pel.id_pelanggan order by id_pesanan asc";
			$sql = mysql_query($query);
			$total = mysql_num_rows($sql);
			while($hasil = mysql_fetch_assoc($sql)){
		?>
        	<tr>
        	<td><center><?= $hasil['id_pesanan']?></center></td>
        	<td><center><?= $hasil['nama_menu']?></center></td>
        	<td><center><?= $hasil['nama_pelanggan']?></center></td>
        	<td><center><?= $hasil['jumlah']?></center></td>
        	<td><center><?= $hasil['username']?></center></td>
        	<td><center><a href='deletep.php?id_pesanan= <?php echo $hasil["id_pesanan"] ?>'><button class="btn">Delete</button></a></center></td>
        	<td><center><a href='editp.php?id_pesanan= <?php echo $hasil["id_pesanan"] ?>'><button class="btn">Edit</button></a></center></td>
        	<td><center><a href='laporan1.php?id_pesanan= <?php echo $hasil["id_pesanan"] ?>'><button class="btn">Laporan</button></a></center></td>
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