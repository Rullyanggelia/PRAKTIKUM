<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Perpus Kota Madiun</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="judul">
            <h1>Perpustakaan Kota Madiun</h1>
            <h2>Form Perpus</h2>
            <h3>www.perpuskotamadiun.ac.id</h3>
        </div>
        <br/>
        <?php 
        if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
        echo "Data berhasil di input.";
        }else if($pesan == "update"){
        echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
        echo "Data berhasil di hapus.";
        }
        }
        ?>
        <br/>
        <a class="tombol" href="input.php">+ Tambah Data Baru</a>

        <h3>Data Perpus</h3>
        <table border="1" class="table">
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Kegiatan</th>
            </tr>
<?php 
include "koneksi.php";
$ambildata = mysqli_query($koneksi, "SELECT * FROM formperpus");
while($tampil = mysqli_fetch_array($ambildata))
{
?>
<tr>
    <td><?php echo $tampil['Nama']; ?></td>
    <td><?php echo $tampil['NIM']; ?></td>
    <td><?php echo $tampil['Kelas']; ?></td>
    <td><?php echo $tampil['Kegiatan']; ?></td>
    <td>
        <a class="edit" href="edit.php?Nama=<?php echo $tampil['Nama']; ?>">Edit</a> |
        <a class="hapus" href="hapus.php?Nama=<?php echo $tampil['Nama']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>