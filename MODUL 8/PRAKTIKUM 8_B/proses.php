<?php
$koneksi = mysqli_connect("localhost", "root", "", "praktikum8_b");

$TglTransaksi = $_POST['TglTransaksi'];
$NoPolisi = $_POST['NoPolisi'];
$idpelanggan = $_POST['idpelanggan'];
$NamaPemilik = $_POST['NamaPemilik'];
$Alamat = $_POST['Alamat'];
$Kota = $_POST['Kota'];
$Merk = $_POST['Merk'];
$Type = $_POST['Type'];
$Model = $_POST['Model'];
$Tahun = $_POST['Tahun'];
$NomorMesin = $_POST['NomorMesin'];
$NomorRangka = $_POST['NomorRangka'];
$Warna = $_POST['Warna'];
$BahanBakar = $_POST['BahanBakar'];
$KMKendaraan = $_POST['KMKendaraan'];
$email = $_POST['email'];
$NoHp = $_POST['NoHp'];
$DeskripsiPerbaikan = $_POST['DeskripsiPerbaikan'];
$Keluhan = $_POST['Keluhan'];
$Submit = $_POST['Submit'];

$query = "INSERT INTO praktikum8_b VALUES('$TglTransaksi', '$NoPolisi', '$idpelanggan', '$NamaPemilik', '$Alamat', '$Kota', '$Merk', '$Type', '$Model', '$Tahun', '$NomorMesin', '$NomorRangka', '$Warna', '$BahanBakar', '$KMKendaraan', '$email', '$NoHp', '$DeskripsiPerbaikan', '$Keluhan', '$Submit')";

$hasil=mysqli_query($koneksi, $query);

if($hasil){
    echo"Terimakasih sudah mengisi Formulir Service Motor";
    exit;
}
else{
    echo"Maaf, Data Anda Gagal Disimpan";
    exit;
}
?>