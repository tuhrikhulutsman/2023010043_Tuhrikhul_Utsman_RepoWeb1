<?php include "header.php" ?>

<?php
if (isset($_GET['delete'])) {
    $userid = $_GET['delete'];

// SQL query to delete data from user table where id = {$userid}
$query = "DELETE FROM data_pembelian WHERE id = {$userid}";
$delete_query = mysqli_query($conn, $query);

if (!$delete_query) {
    die("Query failed: " . mysqli_error($conn));
} else {
    header("Location:mesan.php");
}
}
?>

<?php include "../footer.php" ?>