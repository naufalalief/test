<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<table border="2">
		<th>ID</th>
		<th>Nama Menu</th>
		<th>Harga</th>
		<th colspan="2">Lain</th>
	<tr>
		<?php
			include 'koneksi.php';
			$query = "select * from menu";
			$sql = mysql_query($query);
			$total = mysql_num_rows($sql);
			while($hasil = mysql_fetch_assoc($sql)){
		?>
        	<tr>
        	<td><center><?= $hasil['id_menu']?></center></td>
        	<td><center><?= $hasil['nama_menu']?></center></td>
        	<td><center><?= $hasil['harga']?></center></td>
        	<td><center><a href='deletem.php?id_menu= <?php echo $hasil["id_menu"] ?>'><button class="btn">Delete</button></a></center></td>
        	<td><center><a href='editm.php?id_menu= <?php echo $hasil["id_menu"] ?>'><button class="btn">Edit</button></a></center></td>
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