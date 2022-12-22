<!DOCTYPE html>
<html>
<head>
<title>Update Data di Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
<h1>Formulir Kliik Sehat</h1>
            <h2>Form Klinik</h2>
            <h3>www.kliniksehat.ac.id</h3>
</div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Edit data</h3>
<?php
include "koneksi.php";
$No_Pasien = $_GET['No_Pasien'];
$query_mysql = mysqli_query($koneksi, "SELECT * FROM kliniksehat WHERE No_Pasien='$No_Pasien'");
while($tampil = mysqli_fetch_array($query_mysql)){
?>
<form action="update.php" method="post">
<table>
<tr>
<td>No Pasien</td>
<td><input type="text" name="No Pasien" value="<?php

echo $tampil['No Pasien'] ?>"></td>

</tr>
<tr>
<td>Nama Pasien</td>
<td>
<input type="text" name="Nama Pasien"
value="<?php echo $tampil['Nama Pasien'] ?>">
</td>
</tr>

<tr>
<td>Tinggi Badan</td>
<td><input type="text" name="Tinggi Badan"
value="<?php echo $tampil['Tinggi Badan'] ?>"></td>
</tr>

<tr>
<td>Berat Badan</td>
<td><input type="text" name="Berat Badan"
value="<?php echo $tampil['Berat Badan'] ?>"></td>
</tr>

<tr>
<td>Tekanan Darah</td>
<td><input type="text" name="Tekanan Darah"
value="<?php echo $tampil['Tekanan Darah'] ?>"></td>
</tr>

<tr>
<td>Umur</td>
<td><input type="text" name="Umur"
value="<?php echo $tampil['Umur'] ?>"></td>
</tr>

<tr>
<td>No Hp</td>
<td><input type="text" name="No Hp"
value="<?php echo $tampil['No Hp'] ?>"></td>
</tr>

<tr>
<td>Kunjungan</td>
<td><input type="text" name="Kunjungan"
value="<?php echo $tampil['Kunjungan'] ?>"></td>
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