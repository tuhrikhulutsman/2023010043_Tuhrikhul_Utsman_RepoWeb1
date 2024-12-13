<html>
<body>
<?php
function dicoba() {
    $lokal = 'Saya hanya bisa diakses dari fungsi dimana saya berada';
    echo $lokal; // mencetak variabel lokal
}

// Memanggil fungsi untuk mencetak variabel lokal
dicoba();

// Akan terjadi error jika mencoba mencetak variabel lokal di luar fungsi
// echo $lokal; // Baris ini akan menyebabkan error, jadi sebaiknya dihapus atau dikomentari
?>
</body>
</html>
