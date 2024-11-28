<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Ambil data produk berdasarkan ID
$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; // Jika ingin mengubah gambar juga

    // Update data produk
    mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    // Redirect ke halaman data produk
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form method="post">
        <label>Nama Produk:</label>
        <input type="text" name="name" value="<?= $row['name']; ?>" required><br><br>

        <label>Harga:</label>
        <input type="text" name="price" value="<?= $row['price']; ?>" required><br><br>

        <label>Gambar URL:</label>
        <input type="text" name="image" value="<?= $row['image']; ?>"><br><br>

        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php">Kembali ke Data Produk</a>
</body>
</html>
