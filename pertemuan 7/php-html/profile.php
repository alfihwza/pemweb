<?php 
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h3 class="card-text">Selamat datang, <span class="text-primary"><?= htmlspecialchars($_SESSION['name']); ?></span>.</h3>
                <a href="./backend/logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>

