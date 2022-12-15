<?php 
include 'koneksi.php';
$No Pasien= $_POST['No Pasien'];
$Nama Pasien = $_POST['Nama Pasien'];
$Tinggi Badan = $_POST['Tinggi Badan'];
$Berat Badan = $_POST['Berat Badan'];
$Tekanan Darah = $_POST['Tekanan Darah'];
$Umur = $_POST['Umur'];
$No Hp = $_POST['No Hp'];
$Kunjungan = $_POST['Kunjungan'];
$koneksi = mysqli_query("INSERT INTO mahasiswa VALUES(NULL, '$No Pasien','$Nama Pasien','$Tinggi Badan','$Berat Badan', '$Tekanan Darah', '$Umur', '$No Hp', 'Kunjungan' )");
header("location:index.php?pesan=input");
?>