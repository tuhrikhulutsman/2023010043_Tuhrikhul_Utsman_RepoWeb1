<html>
<body>
<?php
// Mendeklarasikan variabel statik
static $varStatik = 0;

// Menampilkan nilai awal variabel statik
echo "Nilai awal variabel statik: $varStatik";

// Menambahkan nilai pada variabel statik
$varStatik++;

// Menampilkan nilai variabel statik setelah ditambahkan
echo "<br>Nilai variabel statik setelah ditambah: $varStatik";
?>
</body>
</html>