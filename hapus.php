<?php
include 'koneksi.php';  

$conn = connection();  

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM mahasiswa WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
