<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Hapus data produk
mysqli_query($db_connect, "DELETE FROM products WHERE id = $id");

// Redirect ke halaman data produk
header("Location: index.php");
exit();
?>
