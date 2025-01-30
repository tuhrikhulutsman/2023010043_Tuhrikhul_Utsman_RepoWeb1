<?php
// Konfigurasi database
$host = 'localhost'; // Nama host database
$user = 'root'; // Username database
$password = ''; // Password database
$dbname = 'uas_database'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>