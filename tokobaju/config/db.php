<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Password default (jika ada, sesuaikan)
$database = 'penjualan_baju';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>