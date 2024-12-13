<html>
<body>
<?php
// Mendeklarasikan variabel global
global $a;

// Menetapkan nilai pada variabel global
$a = "abc";

// Alternatif menggunakan array superglobal $GLOBALS
$GLOBALS["a"] = "abc";

// Menampilkan nilai variabel global
echo "Nilai variabel a adalah: " . $a;
?>
</body>
</html>