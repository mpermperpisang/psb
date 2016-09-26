<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "smaks101_kartikasiliwangi";

$koneksi = mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);

// if ($pilihdatabase) echo"Berhasil";
// else echo "Gagal Koneksi";
?>