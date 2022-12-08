<?php
date_default_timezone_set("Asia/jakarta");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PRAKTIKUM 8_C</title>
        </head>
        <body>
            <b>FORMULIR KLINIK SEHAT</b> 
            <p></p>
            <table border="0"> 
        <form action=" proses.php" method="POST">
            <label for=""><tr><td>No Pasien</td><td>: </td><td></label>
            <input type="text" name="NoPasien" autocomplete = "off"> <br>
            <label for=""><tr><td>Nama Pasien</td><td>: </td><td></label>
            <input type="text" name="NamaPasien" autocomplete = "off"> <br>
            <label for=""><tr><td>Tempat Lahir</td><td>: </td><td></label>
            <input type="text" name="TempatLahir" autocomplete = "off"> <br>
            <label for=""><tr><td>Tanggal Lahir</td><td>: </td><td></label>
            <input type="date" name="TanggalLahir" autocomplete = "off"> <br>
            <label for=""><tr><td>Alamat</td><td>: </td><td></label>
            <input type="text" name="Alamat" autocomplete = "off"> <br>          
            <label for=""><tr><td>Jenis Kelamin</td><td> : </td><td></label>
            <input type="radio" name="JenisKelamin" value="Laki-Laki">Laki-Laki
            <input type="radio" name="JenisKelamin" value="Perempuan">Perempuan <br>                     
            <label for=""><tr><td>Tinggi Badan</td><td>: </td><td></label>
            <input type="text" name="TinggiBadan" autocomplete = "off"> <br>
            <label for=""><tr><td>Berat Badan</td><td>: </td><td></label>
            <input type="text" name="BeratBadan" autocomplete = "off"> <br>
            <label for=""><tr><td>Tekanan Darah</td><td>:</td><td></label>
            <input type="text" name="TekananDarah" autocomplete = "off"> <br>
            <label for=""><tr><td>Umur</td><td>:</td><td></label>
            <input type="text" name="Umur" autocomplete = "off"> <br>
            <tr><td>Pekerjaan</td><td>:</td><td> 
            <input type="text" name="Pekerjaan" autocomplete = "off"><br />
            <label for=""><tr><td>Kunjungan</td><td>:</td><td></label>
            <select class="" name="Kunjungan">
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli Mata">Poli Mata</option>
                <option value="Poli Jantung">Poli Jantung</option>
                <option value="Poli Anak">Poli Anak</option>
                <option value="Poli Dalam">Poli Dalam</option>
                <option value="Poli Ortopedi">Poli Ortopedi</option>
            </select>
            <tr><td>
            <button type="submit" name="Submit" value = <?php echo date("h:i:sa"); ?> >Kirim</button>
            </form>
        </body>
</html>