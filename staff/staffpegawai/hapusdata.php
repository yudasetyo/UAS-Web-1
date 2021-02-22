<?php 
include '../../../koneksi.php';
$d = $_GET['id'];
mysql_query("DELETE FROM pegawaioutsource WHERE id='$d'")or die(mysql_error());
 
header("location:viewdata");
?>