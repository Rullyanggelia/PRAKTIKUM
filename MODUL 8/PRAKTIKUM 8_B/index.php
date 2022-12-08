<?php
date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PRAKTIKUM 8_B</title>
    </head>
    <body>
        <b>FORMULIR SERVICE MOTOR</b>
        <p></p>
        <table border="0"> 
            <form action="proses.php" method="POST">
            <label for=""><tr><td>Tgl.Transaksi</td><td>:</td><td> </label>
            <input type="date" name="TglTransaksi" autocomplete = "off"><br />
            <label for=""><tr><td>No Polisi</td><td>: </td><td></label>
            <input type="text" name="NoPolisi" autocomplete = "off"><br />
            <label for=""><tr><td>id pelanggan</td><td>:</td><td> </label>
            <input type="text" name="idpelanggan" autocomplete = "off"><br />
            <label for=""><tr><td>Nama Pemilik</td><td>:</td><td> </label>
            <input type="text" name="NamaPemilik" autocomplete = "off"><br />
            <label for=""><tr><td>Alamat</td><td>:</td><td></label>
            <input type="text" name="Alamat" autocomplete = "off"><br />
            <label for=""><tr><td>Kota</td><td>: </td><td></label>
                    <select name="Kota" >
                        <option>SELECT KOTA</option>
                        <option value="Kota Magetan"> Magetan</option>
                        <option>Bandung</option>
                        <option value="Kota Madiun" selected>Madiun</option>
                        <option>Bogor</option>
                        <option>Jakarta</option>
                        <option>Bekasi</option>
                        <option>Tangerang</option>
                        <option>Depok</option>
                        <option>cikarang</option>
                        <option>Banten</option>
                    </select> <br />
            <label for=""><tr><td>Merk</td><td>:</td><td> </label>
            <input type="text" name="Merk" autocomplete = "off"><br />
            <label for=""><tr><td>Type</td><td>:</td><td> </label>
            <input type="text" name="Type" autocomplete = "off"><br />
            <label for=""><tr><td>Jenis Kendaraan</td><td>:</td><td> </label>
            <input type="text" name="JenisKendaraan" autocomplete = "off"><br />
            <label for=""><tr><td>Model</td><td>:</td><td> </label>
            <input type="text" name="Model" autocomplete = "off"><br />
            <label for=""><tr><td>Tahun</td><td>:</td><td> </label>
            <input type="text" name="Tahun" autocomplete = "off"><br />
            <label for=""><tr><td>Nomor Mesin</td><td>:</td><td> </label>
            <input type="text" name="NomorMesin" autocomplete = "off"><br />
            <label for=""><tr><td>Nomor Rangka</td><td>:</td><td> </label>
            <input type="text" name="NomorRangka" autocomplete = "off"><br />
            <label for=""><tr><td>Warna</td><td>:</td><td> </label>
            <input type="text" name="Warna" autocomplete = "off"><br />
            <label for=""><tr><td>Bahan Bakar</td><td>:</td><td> </label>
            <input type="text" name="BahanBakar" autocomplete = "off"><br />                
            <label for=""><tr><td>KM Kendaraan</td><td>:</td><td> </label>
            <input type="text" name="KMKendaraan" autocomplete = "off"><br />
            <label for=""><tr><td>Email</td><td>:</td><td> </label>
            <input type="text" name="email" autocomplete = "off"><br />
            <label for=""><tr><td>No Hp</td><td>:</td><td> </label>
            <input type="text" name="NoHp" autocomplete = "off"><br />
            <label for=""><tr><td>Deskripsi Perbaikan</td><td>:</td><td> </label>
            <input type="text" name="DeskripsiPerbaikan" autocomplete = "off"><br />
            <label for=""><tr><td>Keluhan</td><td>:</td><td> </label>
            <input type="text" name="Keluhan" autocomplete = "off"><br />
            <tr><td>
            <button type="submit" name="Submit" value = <?php echo date("h:i:sa"); ?> >Submit</button>
            </form>
        </body>
</html>
