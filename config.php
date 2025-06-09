<?php
/*
Nama    : Imbran Doni Muar
NIM     : 23083000034
Jurusan : Sistem Informasi
Email   : imbrandoni@gmil.com
*/

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mahasiswa";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>