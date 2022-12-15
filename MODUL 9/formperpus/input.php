<!DOCTYPE html>
<html>
<head>
<title>Input Data Ke Database dengan PHP</title>
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
<h3>Input data baru</h3>
<form action="input-aksi.php" method="post">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="Nama"></td>
</tr>
<tr>
<td>NIM</td>
<td><input type="text" name="NIM"></td>
</tr>
<tr>
<td>Kelas</td>
<td><input type="text" name="Kelas"></td>
</tr>
<tr>
<td>Kegiatan</td>
<td><input type="text" name="Kegiatan"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>