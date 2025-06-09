<?php
/*
Nama    : Imbran Doni Muar
NIM     : 23083000034
Jurusan : Sistem Informasi
*/

include 'config.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
header("Location: index.php");
?>