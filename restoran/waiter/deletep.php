<?php 
include 'koneksi.php';
$id_pesanan = $_GET['id_pesanan'];
mysql_query("DELETE FROM pesanan WHERE id_pesanan='$id_pesanan'")or die(mysql_error());

header("location:listp.php");
?>