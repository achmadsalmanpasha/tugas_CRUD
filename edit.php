<?php
include 'koneksi.php'; 
$conn = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn->query($sql); 
$data = $result->fetch_assoc();  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE mahasiswa SET nama='$nama', npm='$npm', kelamin='$kelamin', alamat='$alamat' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br>
        <label>NPM:</label>
        <input type="text" name="npm" value="<?php echo $data['npm']; ?>" required><br>
        <label>Kelamin:</label>
        <select name="kelamin">
            <option value="Laki-laki" <?php if($data['kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if($data['kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
        </select><br>
        <label>Alamat:</label>
        <textarea name="alamat" required><?php echo $data['alamat']; ?></textarea><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
