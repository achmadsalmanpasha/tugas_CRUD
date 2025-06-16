<?php
function connection() {
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'mahasiswa';

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die('Koneksi Error: ' . mysqli_connect_error());  
    }

    return $conn;
}
?>
