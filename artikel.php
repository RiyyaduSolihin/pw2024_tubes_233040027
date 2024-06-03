<?php
require 'function.php';

//ambil data dari tabel artikel
$artikel = query("SELECT * FROM artikel");

// tombol cari diklik
if( isset($_POST["cari"]) ) {
  $artikel = cari($_POST["keyword"]);

}

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
            <li><a href="hlmnadmin.php">Halaman Admin users</a></li>
            <li><a href="tambah.php">Halaman Tambah data</a></li>
            <li><a href="index.php">Halaman Web</a></li>
            <li><a href="logout.php">Logout</a></li>
            
        </ul>
    </nav>
    <h1>Halaman Admin</h1>
        Selamat datang di halaman admin
    </div>

    <!-- tombol cari/search -->
    <form action=""  method="POST">
    <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search">
    <div class="input-group from-container">
      <input type="text" name="keyword" class="form-control search-input" placeholder="search" autofocus autocomplate="off">
      <span class="input-group-btn">
        <button type="submit" name="cari">
          <img src="images/search.png" alt="" width="35">
        </button>
      </span>
    </div>
 </div>
 </form>
 <br>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">gambar</th>
      <th scope="col">judul</th>
      <th scope="col">isi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
  <?php foreach ( $artikel as $row ) : ?>
        <tr>
       <th scope="row"></th> 
      <td><img src="images/<?= $row["gambar"]; ?>" width="100"></td>
      <td><?= $row["judul"]; ?></td>
      <td><?= $row["isi"]; ?></td>
      <td>
        <a href="ubah.php?id=<?= $row["id"] ?>" class="badge text-bg-warning text-decoration-none">ubah</a>
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');" class="badge text-bg-danger text-decoration-none">Hapus</a>
      </td>
      
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
  </tbody>
</table>

</body>
</html>

