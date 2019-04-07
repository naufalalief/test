<?php
	
	//KONEKSI PHP MYSQL
	$database="restoran";
	$host="localhost";
	$username="root";
	$password="";

	$conn = mysql_connect ($host,$username,$password) or die ("koneksi gagal");
	mysql_select_db ($database, $conn);

	if ($_POST["simpan"]) {
		$id_pesanan = $_POST['id_pesanan'];
		$total = $_POST['total'];
		$bayar = $_POST['bayar'];

		mysql_query("INSERT INTO transaksi (id_transaksi, id_pesanan, total, bayar) Values('','$id_pesanan', '$total','$bayar')");

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
		<?php
			$s="select * from pesanan";
			$q=mysql_query($s);
		?>
<form method="post" action="">	
	<tr>
		<td>
			ID </td><td> : </td><td>
				<select name="id_pesanan" id="id_pesanan">
					<option value="-- Pilih pesanan-nya --" selected>-- Pilih pesanan-nya~ --</option>
						<optgroup label="Pesanan">
						<?php while ($qi = mysql_fetch_array($q)){?>
							<?php 
								$id_menu = $qi['id_menu'];
								// GAE NJEPET REGO MENU
								$__ = mysql_query("SELECT * FROM menu WHERE id_menu = '$id_menu'");
								$__ = mysql_fetch_array($__);
							?>
							<option value="<?=$qi['id_pesanan']?>" total="<?=$__['harga']*$qi['jumlah']?>">[<?=$qi['id_pesanan']?>] - <?=$qi['id_pelanggan']?></option>
						<?php } ?>
						</optgroup>
				</select>
				</select>
		</td>
	</tr>
	<tr>
		<td>
			Total </td><td> : </td><td><input type="text" id="total" name="total" readonly=""><br>
		</td>
	</tr>
	<tr>
		<td>
			Bayar</td><td> : </td><td><input type="text" name="bayar">
		</td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" name="simpan" value="Simpan"></td>
	</tr>
	<tr>
		<td><p id="tes"></p></td>
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
<script>
	const id_pesanan = document.getElementById('id_pesanan')
	const total = document.getElementById('total')

	// EVENT
	id_pesanan.addEventListener('change', function(e) {
		total.value = this.options[this.selectedIndex].getAttribute('total')
	})
</script>