<?php
$koneksi = mysqli_connect("localhost", "root", "", "praktikum8_c");

$NoPasien = $_POST['NoPasien'];
$NamaPasien = $_POST['NamaPasien'];
$TempatLahir = $_POST['TempatLahir'];
$TanggalLahir = $_POST['TanggalLahir'];
$Alamat = $_POST['Alamat'];
$JenisKelamin = $_POST['JenisKelamin'];
$TinggiBadan = $_POST['TinggiBadan'];
$BeratBadan = $_POST['BeratBadan'];
$TekananDarah = $_POST['TekananDarah'];
$Umur = $_POST['Umur'];
$Pekerjaan = $_POST['Pekerjaan'];
$Kunjungan = $_POST['Kunjungan'];
$Submit = $_POST['Submit'];

$query = "INSERT INTO praktikum8_c VALUES('$NoPasien','$NamaPasien','$TempatLahir','$TanggalLahir','$Alamat','$JenisKelamin','$TinggiBadan','$BeratBadan','$TekananDarah','$Umur','$Pekerjaan','$Kunjungan','$Submit')";

$hasil=mysqli_query($koneksi, $query);

if($hasil){
    echo"Anda Berhasil Mengirim Formulir Klinik Sehat..!!";
    exit;
}
else{
    echo"Gagal Menyimpan Data";
    exit;
}
?>