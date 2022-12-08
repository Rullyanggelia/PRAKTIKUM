<?php
$koneksi = mysqli_connect("localhost", "root", "", "praktikum8_a");

$Nama = $_POST['Nama'];
$NIM  = $_POST['NIM'];
$TempatLahir = $_POST['TempatLahir'];
$TanggalLahir = $_POST['TanggalLahir'];
$Alamat = $_POST['Alamat'];
$JenisKelamin = $_POST['JenisKelamin'];
$Status = $_POST['Status'];
$Kegiatan = $_POST['Kegiatan'];
$TanggalPinjam = $_POST['TanggalPinjam'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$Email = $_POST['Email'];
$NoHp = $_POST['NoHp'];
$KritikdanSaran = $_POST['KritikdanSaran'];
$Submit = $_POST['Submit'];

$query = "INSERT INTO praktikum8_a VALUES('$Nama','$NIM','$TempatLahir','$TanggalLahir','$Alamat','$JenisKelamin','$Status','$Kegiatan','$TanggalPinjam','$TanggalPengembalian','$Email','$NoHp','$KritikdanSaran','$Submit')";

$hasil=mysqli_query($koneksi, $query);

if($hasil){
    echo"Anda Berhasil Mengirim Formulir Perpustakaan Kota Madiun..!!";
    exit;
}
else{
    echo"Gagal Menyimpan Data";
    exit;
}
?>