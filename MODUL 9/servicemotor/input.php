<!DOCTYPE html>
<html>
<head>
<title>Input Data Ke Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
<h1>Input Data Ke Database dengan PHP</h1>
<h2>Menampilkan data dari database</h2>
<h3>www.unipma.ac.id</h3>
</div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Input data baru</h3>
<form action="input-aksi.php" method="post">
<table>
<tr>
<td>Tgl Transaksi</td>
<td><input type="text" name="Tgl Transaksi"></td>
</tr>
<tr>
<td>No Polisi</td>
<td><input type="text" name="No Polisi"></td>
</tr>
<tr>
<td>Nama Pemilik</td>
<td><input type="text" name="Nama Pemilik"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="Alamat"></td>
</tr>
<tr>
<td>Jenis Kendaraan</td>
<td><input type="text" name="Jenis Kendaraan"></td>
</tr>
<tr>
<td>Nomor Mesin</td>
<td><input type="text" name="Nomor Mesin"></td>
</tr>
<tr>
<td>Nomor Rangka</td>
<td><input type="text" name="Nomor Rangka"></td>
</tr>
<tr>
<td>Warna</td>
<td><input type="text" name="Warna"></td>
</tr>
<tr>
<td>Bahan Bakar</td>
<td><input type="text" name="Bahan Bakar"></td>
</tr>
<tr>
<td>No Hp</td>
<td><input type="text" name="No Hp"></td>
</tr>
<td></td>
<td><input type="submit" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>