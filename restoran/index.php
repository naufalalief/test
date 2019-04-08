<!DOCTYPE html>
<html>
<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	<table>
		<form action="proses.php" method="post">
		<tr>
			<td>
				Login disek lur
			</td>
		</tr>
		<tr>
			<td>
				Username : 
			</td>
			<td>
				<input type="text" name="username" placeholder="Username...">
			</td>
		</tr>
		<tr>
			<td>
				Password : 
			</td>
			<td>
				<input type="password" name="password" placeholder="Password...">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="login" value="login">
			</td>
		</tr>
	</form>
	</table> 
</body>
</html>