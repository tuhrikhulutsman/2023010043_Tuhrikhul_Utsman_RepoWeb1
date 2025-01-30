<?php
include 'config/db.php';

// Debug koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Debug query
$sql = "SELECT * FROM informasi_toko";
$result = $conn->query($sql);

if ($result === false) {
    die("Kesalahan Query: " . $conn->error);
}

$informasi = $result->fetch_assoc();
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
    <main class="container py-4">
        <h2>Produk Terbaru</h2>
        <div class="row">
            <?php
            $sql = "SELECT * FROM baju ORDER BY id DESC LIMIT 6";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()):
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="assets/img/<?= $row['gambar']; ?>" class="card-img-top" alt="<?= $row['nama_baju']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_baju']; ?></h5>
                        <p class="card-text">Rp<?= number_format($row['harga'], 0, ',', '.'); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </main>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>