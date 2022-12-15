<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Perpus Kota Madiun</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="judul">
            <h1>Formulir Service Motor</h1>
            <h2>Form Service Motor</h2>
            <h3>www.servicemotor.ac.id</h3>
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
                <th>Tgl Transaksi</th>
                <th>No Polisi</th>
                <th>Nama Pemilik</th>
                <th>Alamat</th>
                <th>Jenis Kendaraan</th>
                <th>Nomor Mesin</th>
                <th>Nomor Rangka</th>
                <th>Warna</th>
                <th>Bahan Bakar</th>
                <th>No Hp</th>
            </tr>
<?php 
include "koneksi.php";
$ambildata = mysqli_query($koneksi, "SELECT * FROM servicemotor");
while($tampil = mysqli_fetch_array($ambildata))
{
?>
<tr>
    <td><?php echo $tampil['Tgl Transaksi']; ?></td>
    <td><?php echo $tampil['No Polisi']; ?></td>
    <td><?php echo $tampil['Nama Pemilik']; ?></td>
    <td><?php echo $tampil['Alamat']; ?></td>
    <td><?php echo $tampil['Jenis Kendaraan']; ?></td>
    <td><?php echo $tampil['Nomor Mesin']; ?></td>
    <td><?php echo $tampil['Nomor Rangka']; ?></td>
    <td><?php echo $tampil['Warna']; ?></td>
    <td><?php echo $tampil['Bahan Bakar']; ?></td>
    <td><?php echo $tampil['No Hp']; ?></td>
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