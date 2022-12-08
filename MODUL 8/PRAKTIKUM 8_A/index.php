<?php
date_default_timezone_set("Asia/jakarta");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PRAKTIKUM 8_A</title>
        </head>
        <body>
            <b>FORMULIR PERPUSTAKAAN KOTA MADIUN</b> 
            <p></p>
            <table border="0"> 
        <form action=" proses.php" method="POST">
            <label for=""><tr><td>Nama</td><td>: </td><td></label>
            <input type="text" name="Nama" autocomplete = "off"> <br>
            <label for=""><tr><td>NIM</td><td>: </td><td></label>
            <input type="text" name="NIM" autocomplete = "off"> <br>
            <label for=""><tr><td>Tempat Lahir</td><td>: </td><td></label>
            <input type="text" name="TempatLahir" autocomplete = "off"> <br>
            <label for=""><tr><td>Tanggal Lahir</td><td>: </td><td></label>
            <input type="date" name="TanggalLahir" autocomplete = "off"> <br>
            <label for=""><tr><td>Alamat</td><td>: </td><td></label>
            <input type="text" name="Alamat" autocomplete = "off"> <br>          
            <label for=""><tr><td>Jenis Kelamin</td><td> : </td><td></label>
            <input type="radio" name="JenisKelamin" value="Laki-Laki">Laki-Laki
            <input type="radio" name="JenisKelamin" value="Perempuan">Perempuan <br>            
            <label for=""><tr><td>Status</td><td>:</td><td></label>
            <select class="" name="Status" >
                <option value="Aktif"> Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select><br />
            <label for=""><tr><td>Kegiatan</td><td>:</td><td></label>
            <select class="" name="Kegiatan">
                <option value="Membaca">Membaca</option>
                <option value="Memimjam Buku">Memimjam Buku</option>
                <option value="Mengembalikan Buku">Mengembalikan Buku</option>
            </select>
            <label for=""><tr><td>Tanggal Pinjam</td><td>: </td><td></label>
            <input type="date" name="TanggalPinjam" autocomplete = "off"> <br>
            <label for=""><tr><td>Tanggal Pengembalian</td><td>: </td><td></label>
            <input type="date" name="TanggalPengembalian" autocomplete = "off"> <br>
            <label for=""><tr><td>Email</td><td>:</td><td></label>
            <input type="text" name="Email" autocomplete = "off"> <br>
            <label for=""><tr><td>No Hp</td><td>:</td><td></label>
            <input type="text" name="NoHp" autocomplete = "off"> <br>
            <tr><td>Kritik dan Saran</td><td>:</td><td> 
            <input type="text" name="KritikdanSaran" autocomplete = "off"><br />
            <tr><td>
            <button type="submit" name="Submit" value = <?php echo date("h:i:sa"); ?> >Submit</button>
            </form>
        </body>
</html>