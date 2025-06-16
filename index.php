<?php
include 'koneksi.php';

$conn = connection();  

$sql = "SELECT * FROM mahasiswa";  
$result = mysqli_query($conn, $sql); 

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['npm'];  ?></td>
            <td><?php echo $data['kelamin']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
