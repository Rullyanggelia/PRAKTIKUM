<?php
include 'koneksi.php';
$Nama = $_POST['Nama'];
$Nim = $_POST['Nim'];
$Kelas = $_POST['Kelas'];
$Kegiatan = $_POST['Kegiatan'];
$update = mysqli_query($koneksi, "UPDATE formperpus SET Nim='$Nim', Kelas='$Kelas', Kegiatan='$Kegiatan' WHERE Nama='$Nama'");

if(update) {
    echo "<script> alert ('Data Berhasil Di Ubah') </script>";
    header ("refresh:0;index.php");
} else {
    echo "<script> alert ('Data Tidak Berhasil Di ubah')</script>";
    header ("refresh:0;index.php");
}
?>