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
					$query = "select p.id_pesanan, m.nama_menu, pel.nama_pelanggan, p.jumlah, l.username from pesanan p, menu m, pelanggan pel, login l where id_pesanan='".$_GET["id_pesanan"]."' and p.id_user = l.id_user and p.id_menu = m.id_menu and p.id_pelanggan = pel.id_pelanggan";
					$sql = mysql_query($query);
					$total = mysql_num_rows($sql);
					while($hasil = mysql_fetch_assoc($sql)){
				?>
		        	<tr>
		        	<td>ID Pesanan<hr></td><td> : <hr></td><td><center><?= $hasil['id_pesanan']?></center><hr></td>
		        	</tr>
		        	<tr>
		        	<td>Nama Menu<hr></td><td> : <hr></td><td><center><?= $hasil['nama_menu']?></center><hr></td>
		        	</tr>
		        	<tr>
		        	<td>Nama Pelanggan<hr></td><td> : <hr></td><td><center><?= $hasil['nama_pelanggan']?></center><hr></td>
		        	</tr>
		        	<tr>
		        	<td>Jumlah<hr></td><td> : <hr></td><td><center><?= $hasil['jumlah']?></center><hr></td>
		        	</tr>
		        	<td>User<hr></td><td> : <hr></td><td><center><?= $hasil['username']?></center><hr></td>
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