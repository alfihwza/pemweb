<?php
session_start();
require './../config/db.php';

if(isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($db_connect, $_POST['email']);
    $password = $_POST['password'];

    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);
        
        if(password_verify($password, $data['password'])) {
            // Set session
            $_SESSION['name'] = $data['name'];
            $_SESSION['role'] = $data['role'];

            // Redirect
            if($_SESSION['role'] == 'admin') {
                header('Location: ./../admin.php');
            } else {
                header('Location: ./../profile.php');
            }
            exit;
        } else {
            echo "Password salah";
            exit;
        }
    } else {
        echo "Email atau password salah";
        exit;
    }
}
?>