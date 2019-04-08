<?php 
include 'koneksi.php';
$id_pelanggan = $_GET['id_pelanggan'];
mysql_query("DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'")or die(mysql_error());

header("location:list.php");
?>