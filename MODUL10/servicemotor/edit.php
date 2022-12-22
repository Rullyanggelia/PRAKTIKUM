<!DOCTYPE html>
<html>
<head>
<title>Update Data di Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
<h1>Formulir Service Motor</h1>
            <h2>Form Service Motor</h2>
            <h3>www.servicemotor.ac.id</h3>
</div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Edit data</h3>
<?php
include "koneksi.php";
$Tgl_Transaksi = $_GET['Tgl_Transaksi'];
$query_mysql = mysqli_query($koneksi, "SELECT * FROM servicemotor WHERE Tgl Transaksi='$Tgl_Transaksi'");
while($tampil = mysqli_fetch_array($query_mysql)){
?>
<form action="update.php" method="post">
<table>
<tr>
<td>Tgl Transaksi</td>
<td><input type="text" name="Tgl Transaksi" value="<?php
echo $tampil['Tgl Transaksi'] ?>"></td>

</tr>
<tr>
<td>No Polisi</td>
<td>
<input type="text" name="No Polisi"
value="<?php echo $tampil['No Polisi'] ?>">
</td>
</tr>

<tr>
<td>Nama Pemilik</td>
<td><input type="text" name="Nama Pemilik"
value="<?php echo $tampil['Nama Pemilik'] ?>"></td>
</tr>

<tr>
<td>Alamat</td>
<td><input type="text" name="Alamat"
value="<?php echo $tampil['Alamat'] ?>"></td>
</tr>

<tr>
<td>Jenis Kendaraan</td>
<td><input type="text" name="Jenis Kendaraan"
value="<?php echo $tampil['Jenis Kendaraan'] ?>"></td>
</tr>

<tr>
<td>Nomor Mesin</td>
<td><input type="text" name="Nomor Mesin"
value="<?php echo $tampil['Nomor Mesin'] ?>"></td>
</tr>

<tr>
<td>Nomor Rangka</td>
<td><input type="text" name="Nomor Rangka"
value="<?php echo $tampil['Nomor Rangka'] ?>"></td>
</tr>

<tr>
<td>Warna</td>
<td><input type="text" name="Warna"
value="<?php echo $tampil['Warna'] ?>"></td>
</tr>

<tr>
<td>Bahan Bakar</td>
<td><input type="text" name="Bahan Bakar"
value="<?php echo $tampil['Bahan Bakar'] ?>"></td>
</tr>

<tr>
<td>No Hp</td>
<td><input type="text" name="No Hp"
value="<?php echo $tampil['No Hp'] ?>"></td>
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