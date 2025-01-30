<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['gambar']['name'];

        move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/img/$gambar");

        $sql = "INSERT INTO baju (nama_baju, harga, gambar) VALUES ('$nama', '$harga', '$gambar')";
        $conn->query($sql);
    } elseif (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/img/$gambar");
            $sql = "UPDATE baju SET nama_baju = '$nama', harga = '$harga', gambar = '$gambar' WHERE id = $id";
        } else {
            $sql = "UPDATE baju SET
