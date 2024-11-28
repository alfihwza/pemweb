<?php
session_start();
require './../config/db.php';

if(isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($db_connect, $_POST['name']);
    $email = mysqli_real_escape_string($db_connect, $_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($confirm !== $password) {
        echo "Password tidak sesuai dengan konfirmasi password";
        exit;
    }

    // Cek email sudah digunakan atau belum
    $usedEmail = mysqli_query($db_connect, "SELECT email FROM users WHERE email = '$email'");
    if(mysqli_num_rows($usedEmail) > 0) {
        echo "Email sudah digunakan";
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $created_at = date('Y-m-d H:i:s');

    // Insert data user
    $users = mysqli_query($db_connect, 
        "INSERT INTO users (name, email, password, created_at) VALUES ('$name', '$email', '$hashedPassword', '$created_at')"
    );

    // Ambil data user untuk session
    $getUserData = mysqli_query($db_connect, "SELECT name, role FROM users WHERE email= '$email'");
    if($sessionData = mysqli_fetch_assoc($getUserData)) {
        $_SESSION['name'] = $sessionData['name'];
        $_SESSION['role'] = $sessionData['role'];

        header('Location: ./../profile.php');
        exit;
    } else {
        echo "Terjadi kesalahan saat mengambil data pengguna.";
        exit;
    }
}
?>
