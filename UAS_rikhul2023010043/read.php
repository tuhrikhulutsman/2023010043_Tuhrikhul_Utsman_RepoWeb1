<?php include 'header.php' ?>
<h1 class="text-center">Detail Pemesanan</h1>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">JenisPakaian</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Warna</th>
                <th scope="col">NomerHP</th>
            </tr>
        </thead>
<tbody>
<tr>
<?php
// first we check using 'isset() functionif the variable is set or not'
//Processing form data when form issubmitted
if (isset($_GET['user_id'])) {
    $userid = $_GET['user_id'];
    // SQL query to fetch the data whereid=$userid & storing data in view_user 
    $query = "SELECT * FROM data_pembelian WHERE ID
    = {$userid} ";
    $view_users = mysqli_query($conn,
    $query);
    while ($row =
mysqli_fetch_assoc($view_users)) {
    $id = $row['id'];
    $nama = $row['nama'];
    $jenispakaian = $row['jenispakaian'];
    $ukuran = $row['ukuran'];
    $warna = $row['warna'];
    $nomerHP = $row['nomerHP'];
echo "<tr >";
echo "<td>{$id}</td>";
    echo "<td>{$nama}</td>";
    echo "<td>{$jenispakaian}</td>";
    echo "<td>{$ukuran}</td>";
    echo "<td>{$warna}</td>";
    echo "<td>{$nomerHP}</td>";
echo " </tr> ";
}
}
?>
</tr>
</tbody>
</table>
</div>
<!-- a BACK Button to go to pervious page -->
<div class="container text-center mt-5">
<a href="mesan.php" class="btn btn-warning mt-5"> kembali
</a>
<div>
<!-- Footer -->
<?php include "footer.php" ?>