<?php
// Data produk sementara
$products = [
    'dewasa' => [
        ['nama' => 'Kemeja', 'harga' => 200000, 'ukuran' => 'S, M, L, XL', 'gambar' => 'assets/kemeja.jpg'],
        ['nama' => 'Gamis', 'harga' => 250000, 'ukuran' => 'M, L, XL', 'gambar' => 'assets/gamis.jpg']
    ],
    'remaja' => [
        ['nama' => 'Kaos', 'harga' => 100000, 'ukuran' => 'S, M, L, XL', 'gambar' => 'assets/kaos.jpg'],
        ['nama' => 'Jaket', 'harga' => 300000, 'ukuran' => 'M, L', 'gambar' => 'assets/jaket.jpg']
    ],
    'anak' => [
        ['nama' => 'Dress', 'harga' => 150000, 'ukuran' => 'S, M, L', 'gambar' => 'assets/dress.jpg'],
        ['nama' => 'Setelan Anak', 'harga' => 120000, 'ukuran' => 'S, M', 'gambar' => 'assets/setelan-anak.jpg']
    ]
];

// Ambil kategori dari parameter GET
$category = $_GET['category'] ?? 'dewasa';

// Periksa apakah kategori valid
if (!array_key_exists($category, $products)) {
    echo "<p>Kategori tidak ditemukan!</p>";
    exit;
}

// Tampilkan produk untuk kategori yang dipilih
foreach ($products[$category] as $product) {
    echo "
        <div class='row mb-4'>
            <div class='col-md-6 text-center'>
                <img src='{$product['gambar']}' alt='{$product['nama']}' class='img-fluid'>
            </div>
            <div class='col-md-6'>
                <h4>{$product['nama']}</h4>
                <p>Harga: Rp " . number_format($product['harga'], 0, ',', '.') . "</p>
                <p>Ukuran: {$product['ukuran']}</p>
            </div>
        </div>
    ";
}
?>
