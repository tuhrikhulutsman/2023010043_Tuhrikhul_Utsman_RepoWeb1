<html>
<body>
<?php
$hari = date("D"); // Mendapatkan hari dalam format singkatan (Mon, Tue, dll.)
echo "Hari ini adalah: $hari"; // Menampilkan hari yang didapatkan

if ($hari == "Mon") {
    echo "<br>Selamat berlibur"; // Menampilkan pesan jika hari adalah Senin
} else {
    echo "<br>Bukan hari Senin"; // Menampilkan pesan jika bukan hari Senin
}
?>
</body>
</html>