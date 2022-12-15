<?php
$host = "localhost";
$user ="root";
$password = "";
$database = "modul8";

$koneksi = mysqli_connect($host, $user, $password, $database);
if ($koneksi)
{
    $buka = mysqli_select_db($koneksi, $database);
    echo "Database terhubung";
    if (!$buka)
    {
        echo "Database tidak terhubung";
    }
}
else
{
    echo "MSQL tidak terhubung";
}
?>