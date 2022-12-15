<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Perpus Kota Madiun</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="judul">
            <h1>Formulir Kliik Sehat</h1>
            <h2>Form Klinik</h2>
            <h3>www.kliniksehat.ac.id</h3>
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
                <th>No Pasien</th>
                <th>Nama Pasien</th>
                <th>Tinggi Badan</th>
                <th>Berat Badan</th>
                <th>Tekanan Darah</th>
                <th>Umur</th>
                <th>No Hp</th>
                <th>Kunjungan</th>
            </tr>
<?php 
include "koneksi.php";
$ambildata = mysqli_query($koneksi, "SELECT * FROM kliniksehat");
while($tampil = mysqli_fetch_array($ambildata))
{
?>
<tr>
    <td><?php echo $tampil['No Pasien']; ?></td>
    <td><?php echo $tampil['Nama Pasien']; ?></td>
    <td><?php echo $tampil['Tinggi Badan']; ?></td>
    <td><?php echo $tampil['Berat Badan']; ?></td>
    <td><?php echo $tampil['Tekanan Darah']; ?></td>
    <td><?php echo $tampil['Umur']; ?></td>
    <td><?php echo $tampil['No Hp']; ?></td>
    <td><?php echo $tampil['Kunjungan']; ?></td>
    <td>
        <a class="edit" href="edit.php?npm=<?php echo 
        $data['npm']; ?>">Edit</a> |
        <a class="hapus" href="hapus.php?npm=<?php 
        echo $data['npm']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>