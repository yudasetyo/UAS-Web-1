<?php 
// koneksi database
include '../../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$jk = $_POST['JK'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO pegawai VALUES('$id_pegawai','$nama','$jk','$nip','$alamat','$kota','$provinsi')");
 
// mengalihkan halaman kembali ke viewdata.php
header("location:viewdata");
 
?>