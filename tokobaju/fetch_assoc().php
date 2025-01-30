<?php
include 'config/db.php';

// Query untuk mendapatkan informasi toko
$sql = "SELECT * FROM informasi_toko";
$result = $conn->query($sql);

// Validasi hasil query
if ($result === false) {
    die("Kesalahan Query: " . $conn->error);
}

// Pastikan data tersedia
if ($result->num_rows > 0) {
    $informasi = $result->fetch_assoc();
} else {
    $informasi = [
        'nama_toko' => 'Nama Toko Tidak Ditemukan',
        'deskripsi_toko' => 'Deskripsi tidak tersedia.',
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $informasi['nama_toko']; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-5">
        <h1><?= $informasi['nama_toko']; ?></h1>
        <p><?= $informasi['deskripsi_toko']; ?></p>
    </header>
    <!-- Konten lainnya -->
</body>
</html>