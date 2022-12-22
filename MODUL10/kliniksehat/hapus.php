<?php
include "koneksi.php";
$No_Pasien = $_GET['No_Pasien'];
$sql = "DELETE FROM kliniksehat WHERE No_Pasien='$No_Pasien'";
$execute = mysqli_query($koneksi, $sql);

if($execute){
    header ("location:index.php");
} else {
    echo "GAGAL MENGHAPUS !!";
}
    
?>