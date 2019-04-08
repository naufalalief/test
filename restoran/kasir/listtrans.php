<?php
	$key = isset($_GET['cari']) ? $_GET['cari'] : '';
?>
<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<table border="2">
	<tr>
		<form action="">
		<td colspan="3">Search</td><td colspan="3"><input type="text" name="cari" value="<?=$key?>"><input type="submit" value="Cari"></td>
		</form>
	</tr>
		<th>ID Transaksi</th>
		<th>ID Pesanan</th>
		<th>Total</th>
		<th>Bayar</th>
		<th colspan="2">Lain</th>
	<tr>
		<?php
			include 'koneksi.php';
			$query = "select * from transaksi where id_transaksi like '%$key%'";
			$sql = mysql_query($query);
			$total = mysql_num_rows($sql);
			while($hasil = mysql_fetch_assoc($sql)){
		?>
        	<tr>
        	<td><center><?= $hasil['id_transaksi']?></center></td>
        	<td><center><?= $hasil['id_pesanan']?></center></td>
        	<td><center><?= $hasil['total']?></center></td>
        	<td><center><?= $hasil['bayar']?></center></td>
        	<td><center><a href='deletem.php?id_menu= <?php echo $hasil["id_menu"] ?>'><button class="btn">Delete</button></a></center></td>
        	<td><center><a href='laporan.php?id_transaksi= <?php echo $hasil["id_transaksi"] ?>'><button class="btn">Laporan</button></a></center></td>
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