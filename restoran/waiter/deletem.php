<?php 
include 'koneksi.php';
$id_menu = $_GET['id_menu'];
mysql_query("DELETE FROM menu WHERE id_menu='$id_menu'")or die(mysql_error());

header("location:listm.php");
?>