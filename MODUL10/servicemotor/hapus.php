<?php
include "koneksi.php";
$Tgl_Transaksi = $_GET['Tgl_Transaksi'];
$sql = "DELETE FROM servicemotor WHERE Tgl_Transaksi='$Tgl_Transaksi'";
$execute = mysqli_query($koneksi, $sql);

if($execute){
    header ("location:index.php");
} else {
    echo "GAGAL MENGHAPUS !!";
}
    
?>