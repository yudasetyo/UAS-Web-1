<?php

$myHost = "localhost";
$myUser = "root";
$myPass = "";
$myDBS  = "outsource";

$koneksi = mysqli_connect($myHost,$myUser,$myPass,$myDBS);

if (! $koneksi) {
	echo "Koneksi Gagal !";
}

?>
