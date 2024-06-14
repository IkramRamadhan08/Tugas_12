<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "uts_312110478";

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (mysqli_connect_errno()) {
    // Jika koneksi gagal
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    echo "Koneksi berhasil";
}
?>
