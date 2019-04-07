<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
<body>
	<table   width="100%">
		<tr>
			<td><font size="5"><b>Warung Wibu</b></font></td>
		</tr>
		<tr>
			<td><font size="1">Jalan N1994 Gang Buntu</font></td>
		</tr>
		<tr>
			<td><font size="1">Konohagakure</font></td>
		</tr>
		<tr>
			<td><font size="1">14069</font></td>
		</tr>
		<tr>
				<?php
					include 'koneksi.php';
					$query = "SELECT t.id_transaksi, p.id_pesanan, m.nama_menu, p.jumlah, t.total, t.bayar, m.harga FROM transaksi t, pesanan p, menu m WHERE t.id_pesanan = p.id_pesanan AND p.id_menu = m.id_menu
";
					$sql = mysql_query($query);
					$total = mysql_num_rows($sql);
					while($hasil = mysql_fetch_assoc($sql)){
				?>
					<tr>
					<td colspan="10"><hr><center>Tanda Bukti <s>Ngutang</s> Pembayaran</center><hr></td>
					</tr>
		        	<tr>
		        	<th align="left">Transaksi</th><td>:</td><td><?= $hasil['id_transaksi']?></td>
		        	</tr>
		        	<tr>
		        	<th align="left">Pesanan</th><td>:</td><td><?= $hasil['id_pesanan']?></td>
		        	</tr>
		        	<tr>
		        	<th align="left">Nama Menu</th><td>:</td><td><?= $hasil['nama_menu']?></td>
		        	</tr>
		        	<tr>
		        	<th align="left">Harga</th><td>:</td><td><?= $hasil['harga']?></td>
		        	</tr>
		        	<tr>
		        	<th align="left">Jumlah</th><td>:</td><td><?= $hasil['jumlah']?></td>
		        	</tr>
		        	<tr>
		        	<th align="left">Total Pembayaran</th><td>:</td><td><?= $hasil['total']?></td>
		        	</tr>
		        	<tr>
		        	<th align="left">Bayar</th><td>:</td><td><?= $hasil['bayar']?></td>
		        	<tr>
		        		<td colspan="30"><hr></td>
		        	</tr>
		        	<tr>
		        	<td colspan="5" align="center">Terima kasih atas kunjungannya, Semoga selamat sampai tujuan :></td>
		        	</tr>
		        	<tr>
		        	<td colspan="3" align="right"><br><br><br><font size="2">N1994</td><td><br><br><br>.....................</td>
		        	</tr>
		        	<tr>
		        	<td colspan="3" align="right"></td><td><br><br><br><br><s>Kafir</s>(Kasir)</td>
		        	</tr>
		        	<tr>
		        	<td colspan="30"><br><hr><br></td>
		        	</tr>
		<?php
		    }
		    ?>
			</tr>
		        	<tr>
		        	<td><br><a href='listtrans.php'><button class="btn">Kembali</button></a></center></td>
					</tr>
	</table>
</body>
</html>