<!-- Header --> 
<?php include "header.php" ?> 
 
<?php 
if (isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $jenispakaian = $_POST['jenispakaian'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];
    $nomerHP = $_POST['nomerHP'];
 
    // Query SQL untuk memasukkan data ke tabel data_pembelian
    $query = "INSERT INTO data_pembelian (nama, jenispakaian, ukuran, warna, nomerHP) 
              VALUES ('{$nama}', '{$jenispakaian}', '{$ukuran}', '{$warna}', '{$nomerHP}')";
    $add_user = mysqli_query($conn, $query);
 
    // displaying proper message for the user to see whether the query executed perfectly or not  
    if (!$add_user) { 
        echo "something went wrong " . mysqli_error($conn); 
    } else { 
        echo "<script type='text/javascript'>alert('User added successfully!')</script>"; 
    } 
} 
?> 
 
 <h1 class="text-center">Tambah Data Pemesanan</h1>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jenispakaian" class="form-label">JenisPakaian</label>
            <input type="text" name="jenispakaian" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ukuran" class="form-label">Ukuran</label>
            <input type="text" name="ukuran" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" name="warna" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nomerHP" class="form-label">NomerHP</label>
            <input type="text" name="nomerHP" class="form-control" required>
        </div> 
        <div class="form-group"> 
            <input type="submit" name="create" class="btn btn-primary mt-2" value="oke"> 
        </div> 
    </form> 
</div> 
 
<!-- a BACK button to go to the home page --> 
<div class="container text-center mt-5"> 
    <a href="home.php" class="btn btn-warning mt-5"> kembali</a> 
<div> 
 
<!-- Footer --> 
<?php include "footer.php" ?>