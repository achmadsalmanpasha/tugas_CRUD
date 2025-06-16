<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];


    $sql = "INSERT INTO mahasiswa (npm, nama, kelamin, alamat) 
    VALUES ('$npm', '$nama', '$kelamin', '$alamat')";

    $result = mysqli_query(connection(), $sql);

    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="npm">NPM:</label></td>
                <td><input type="text" id="npm" name="npm" required></td>
            </tr>
            <tr>
                <td><label for="kelamin">Kelamin:</label></td>
                <td>
                    <select name="kelamin" id="kelamin" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><textarea name="alamat" id="alamat" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Tambah</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
