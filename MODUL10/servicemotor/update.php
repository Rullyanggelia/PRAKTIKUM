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
$Nomor Rangka = $_POST['Nomor Rangka'];
$No Hp = $_POST['No Hp'];
$update = mysqli_query($koneksi, "UPDATE servicemotor SET No Polisi='$No Polisi',Nama Pemilik='$Nama Pemilik', Alamat='$Alamat', Jenis Kendaraan='$Jenis Kendaraan', Nomor Mesin='$Nomor Mesin', Nomor Rangka='$Nomor Rangka', Warna='$Warna', Bahan Bakar='$Bahan Bakar', No Hp='$No Hp' WHERE Tgl Transaksi='$Tgl Transaksi'");

if(update) {
    echo "<script> alert ('Data Berhasil Di Ubah') </script>";
    header ("refresh:0;index.php");
} else {
    echo "<script> alert ('Data Tidak Berhasil Di ubah')</script>";
    header ("refresh:0;index.php");
}
?>