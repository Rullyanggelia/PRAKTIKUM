<?php
include 'koneksi.php';
$No Pasien = $_POST['No_Pasien'];
$Nama Pasien = $_POST['Nama Pasien'];
$Tinggi Badan = $_POST['Tinggi Badan'];
$Berat Badan = $_POST['Berat Badan'];
$Tekanan Darah = $_POST['Tekanan Darah'];
$Umur = $_POST['Umur'];
$No Hp = $_POST['No Hp'];
$Kunjungan = $_POST['Kunjungan'];
$update = mysqli_query($koneksi, "UPDATE kliniksehat SET Nama Pasien='$Nama Pasien',Tinggi Badan='$Tinggi Badan', Berat Badan='$Berat Badan', Tekanan Darah='$Tekanan Darah', Umur='$Umur', No Hp='$No Hp', Kunjungan='$Kunjungan' WHERE No_Pasien='$No_Pasien'");

if(update) {
    echo "<script> alert ('Data Berhasil Di Ubah') </script>";
    header ("refresh:0;index.php");
} else {
    echo "<script> alert ('Data Tidak Berhasil Di ubah')</script>";
    header ("refresh:0;index.php");
}
?>