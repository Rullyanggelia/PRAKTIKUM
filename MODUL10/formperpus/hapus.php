<?php
include "koneksi.php";
$Nama = $_GET['Nama'];
$sql = "DELETE FROM formperpus WHERE Nama='$Nama'";
$execute = mysqli_query($koneksi, $sql);

if($execute){
    header ("location:index.php");
} else {
    echo "GAGAL MENGHAPUS !!";
}
    
?>