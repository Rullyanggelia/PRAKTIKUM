<?php 
include 'koneksi.php';
$Tgl Transaksi = $_POST['Tgl Transaksi'];
$No Polisi = $_POST['No Polisi'];
$Nama Pemilik = $_POST['Nama Pemilik'];
$Alamat = $_POST['Alamat'];
$Jenis Kendaraan = $_POST['Jenis Kendaraan'];
$Nomor Mesin = $_POST['Nomor Mesin'];
$Nomor Rangka = $_POST['Nomor Rangka'];
$Warna = $_POST['Warna'];
$Bahan Bakar = $_POST['Bahan Bakar'];
$No Hp = $_POST['No Hp'];
$koneksi = mysqli_query("INSERT INTO mahasiswa VALUES(NULL, '$Tgl Transaksi','$No Polisi','$Nama Pemilik','$Alamat', '$Jenis Kendaraan','$Nomor Mesin','$Nomor Rangka','$Warna', '$Bahan Bakar', '$No Hp')");
header("location:index.php?pesan=input");
?>