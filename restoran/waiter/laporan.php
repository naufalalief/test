<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<table border="0">
	<tr>
		<?php
			include 'koneksi.php';
			$query = "select p.id_pesanan, m.nama_menu, pel.nama_pelanggan, p.jumlah, l.username from pesanan p, menu m, pelanggan pel, login l where p.id_user = l.id_user and p.id_menu = m.id_menu and p.id_pelanggan = pel.id_pelanggan order by id_pesanan asc";
			$sql = mysql_query($query);
			while($hasil = mysql_fetch_assoc($sql)){
		?>
        	<tr>
        		<td>ID</td><td>:</td><td><center><?= $hasil['id_pesanan']?></center></td>
        	</tr>
        	<tr>
        		<td>Pelanggan</td><td>:</td><td><center><?= $hasil['nama_pelanggan']?></center></td>
        	</tr>
        	<tr>
        		<td>Nama Menu</td><td>:</td><td><center><?= $hasil['nama_menu']?></center></td>
        	</tr>
        	<tr>
        		<td>Jumlah</td><td>:</td><td><center><?= $hasil['jumlah']?></center></td>
        	</tr>
        	<tr>
        		<td>Pelayan</td><td>:</td><td><center><?= $hasil['username']?></center></td>
			</tr>
			<tr>
				<td colspan="7"><hr></td>
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