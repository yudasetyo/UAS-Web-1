<?php 
// koneksi database
include '../../../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
 
// menginput data ke database
mysqli_query($koneksi,"UPDATE pegawaioutsource SET nama='$nama', alamat='$alamat', kota='$kota', provinsi='$provinsi' WHERE nama='$nama'");
 
// mengalihkan halaman kembali ke viewdata.php
header("location:viewdata");