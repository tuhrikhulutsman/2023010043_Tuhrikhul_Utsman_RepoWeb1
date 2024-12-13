<html>
<body>
<?php
// Menghitung penjualan bersih
$jual = 100000; // Nilai penjualan
$potongan = 0.1; // Potongan sebesar 10% (ditulis dalam desimal)
$net = $jual - ($jual * $potongan); // Menghitung penjualan bersih

// Menampilkan hasil
echo "Penjualan bersih = Rp $net,00";
?>
</body>
</html>