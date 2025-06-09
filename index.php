<?php
/*
Nama    : Imbran Doni Muar
NIM     : 23083000034
Jurusan : Sistem Informasi
Email   : imbrandoni@gmil.com
*/

include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<h2>Data Mahasiswa</h2>
<a href="tambah.php">+ Tambah Data</a>
<table border="1">
    <tr>
        <th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    while($data = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$no++}</td>
            <td>{$data['nama']}</td>
            <td>{$data['nim']}</td>
            <td>{$data['jurusan']}</td>
            <td>
                <a href='edit.php?id={$data['id']}'>Edit</a> |
                <a href='hapus.php?id={$data['id']}'>Hapus</a>
            </td>
        </tr>";
    }
    ?>
</table>
