<?php
session_start();
include("koneksi.php");
if(!isset($_SESSION['admin_username'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div id="app">
        <nav>
            <ul>
            <li><a href="admin.php">Halaman Admin</a></li>
            <li><a href="index.php">Halaman Web</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <h1>Halaman Admin</h1>
        Selamat datang di halaman admin
    </div>

</body>
</html>