<?php include "header.php" ?>
<?php
// checking if the variable is set or not and if set addingthe set data value to variable userid
if (isset($_GET['user_id'])) {
$userid = $_GET['user_id'];
}
// SQL query untuk mengambil data berdasarkan ID
$query = "SELECT * FROM data_pembelian WHERE id = $userid";
$view_users = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($view_users)) {
    $id = $row['id'];
    $nama = $row['nama'];
    $jenispakaian = $row['jenispakaian'];
    $ukuran = $row['ukuran'];
    $warna = $row['warna'];
    $nomerHP = $row['nomerHP'];
}
//Processing form data when form is submitted
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $jenispakaian = $_POST['jenispakaian'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];
    $nomerHP = $_POST['nomerHP'];
    // SQL query to update the data in user table where theid = $userid
    $query = "UPDATE data_pembelian SET nama = '{$nama}',jenispakaian = '{$jenispakaian}',ukuran ='{$ukuran}', warna = '{$warna}', nomerHP = '{$nomerHP}'  WHERE id = {$userid}";
$update_user = mysqli_query($conn, $query);
echo "<script type='text/javascript'>alert('User data
updated successfully!')</script>";
}
?>
<h1 class="text-center">Update Data Pemesanan</h1>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" required>
        </div>
        <div class="form-group">
            <label for="jenispakaian">Jenis Pakaian</label>
            <input type="text" name="jenispakaian" class="form-control" value="<?php echo $jenispakaian; ?>" required>
        </div>
        <div class="form-group">
            <label for="ukuran">Ukuran</label>
            <input type="text" name="ukuran" class="form-control" value="<?php echo $ukuran; ?>" required>
        </div>
        <div class="form-group">
            <label for="warna">Warna</label>
            <input type="text" name="warna" class="form-control" value="<?php echo $warna; ?>" required>
        </div>
        <div class="form-group">
            <label for="nomerHP">Nomer HP</label>
            <input type="text" name="nomerHP" class="form-control" value="<?php echo $nomerHP; ?>" required>
        </div>
        <div class="form-group">
            <input type="submit" name="update" class="btn btn-primary mt-2" value="Update">
        </div>
    </form>
</div>
<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
<a href="mesan.php" class="btn btn-warning mt-5"> Back
</a>
<div>