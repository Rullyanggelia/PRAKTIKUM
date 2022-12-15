<?php 
include 'koneksi.php';
$npm = $_POST['Nama'];
$nama = $_POST['NIM'];
$alamat = $_POST['Kelas'];
$kelas = $_POST['Kegiatan'];
$koneksi = mysqli_query("INSERT INTO formperpus VALUES(NULL, '$Nama','$NIM','$Kelas','$Kegiatan')");
header("location:index.php?pesan=input");
?>