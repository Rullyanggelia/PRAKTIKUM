<!DOCTYPE html>
<html>
<head>
<title>Input Data Ke Database dengan PHP</title>
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
<h3>Input data baru</h3>
<form action="input-aksi.php" method="post">
<table>
<tr>
<td>No Pasien</td>
<td><input type="text" name="No Pasien"></td>
</tr>
<tr>
<td>Nama Pasien</td>
<td><input type="text" name="Nama Pasien"></td>
</tr>
<tr>
<td>Tinggi Badan</td>
<td><input type="text" name="Tinggi Badan"></td>
</tr>
<tr>
<td>Berat Badan</td>
<td><input type="text" name="Berat Badan"></td>
</tr>
<tr>
<td>Tekanan Darah</td>
<td><input type="text" name="Tekanan Darah"></td>
</tr>
<tr>
<td>Umur</td>
<td><input type="text" name="Umur"></td>
</tr>
<tr>
<td>No Hp</td>
<td><input type="text" name="No Hp"></td>
</tr>
<tr>
<td>Kunjungan</td>
<td><input type="text" name="Kunjungan"></td>
</tr>
<td></td>
<td><input type="submit" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>