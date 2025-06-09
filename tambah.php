<?php
/*
Nama    : Imbran Doni Muar
NIM     : 23083000034
Jurusan : Sistem Informasi
*/

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn, "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')");
    header("Location: index.php");
}
?>

<h2>Tambah Data Mahasiswa</h2>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    NIM: <input type="text" name="nim"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    <input type="submit" value="Simpan">
</form>
