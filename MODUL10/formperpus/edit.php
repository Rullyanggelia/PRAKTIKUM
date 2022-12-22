<!DOCTYPE html>
<html>
<head>
<title>Update Data di Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Perpustakaan Kota Madiun</h1>
        <h2>Form Perpus</h2>
        <h3>www.perpuskotamadiun.ac.id</h3>
    </div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Edit data</h3>
<?php
include "koneksi.php";
$Nama = $_GET['Nama'];
$query_mysql = mysqli_query($koneksi, "SELECT * FROM formperpus WHERE Nama='$Nama'");
while($tampil = mysqli_fetch_array($query_mysql)){
?>
<form action="update.php" method="post">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="Nama" value="<?php

echo $tampil['Nama'] ?>"></td>

</tr>
<tr>
<td>Nim</td>
<td>
<input type="text" name="Nim"

value="<?php echo $tampil['Nim'] ?>">

</td>
</tr>
<tr>
<td>Kelas</td>
<td><input type="text" name="Kelas"

value="<?php echo $tampil['Kelas'] ?>"></td>

</tr>
<tr>
<td>kegiatan</td>
<td><input type="text" name="kegiatan"

value="<?php echo $tampil['kegiatan'] ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Simpan"></td>
</tr>
</table>
</form>
<?php } ?>
</body>
</html>