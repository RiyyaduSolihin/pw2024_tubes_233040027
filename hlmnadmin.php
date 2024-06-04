<?php
session_start();

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
require 'function.php';

//ambil data dari tabel users
$users = query("SELECT * FROM users");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div id="app">
        <nav>
            <ul>
            <li><a href="artikel.php">Halaman Artikel</a></li>
            <li><a href="index.php">Halaman Web</a></li>
            <li><a href="logout.php">Logout</a></li>
            
        </ul>
    </nav>
    <h1>Halaman Admin</h1>
        Selamat datang di halaman admin
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">fullname</th>
      <th scope="col">ussename</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ( $users as $row ) : ?>
        <tr>

       <th scope="row"><?= $i; ?></th> 
      <td><?= $row["fullname"]; ?></td>
      <td><?= $row["username"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["password"]; ?></td>
      <td>
        <a href="" class="badge text-bg-warning text-decoration-none">ubah</a>
        <a href="hapususer.php?fullname=<?= $row['fullname'];?>" class="badge text-bg-danger text-decoration-none">Hapus</a>
      </td>
      
    </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    
  </tbody>
</table>

</body>
</html>