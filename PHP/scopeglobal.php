<html>
<body>
    <?php
    $a = 10; // Variabel global

    function myTest() {
        // Mengakses variabel global dan menampilkannya
        global $a;
        echo "Nilai variabel a dari dalam fungsi: " . $a;
    }

    myTest();
    ?>
</body>
</html>