<?php
require 'function.php';

$id = $_GET ['id'];

$art = query("SELECT * FROM artikel WHERE id=$id")[0];


//jika tombol tambah diklik
if(isset($_POST['ubah'])) {
// jika data berhasil ditambahkan
if(ubah($_POST) > 0) {
  echo "<script>
  alert('data berhasil ditambahkan')
  document.location.href = 'artikel.php';
  </script>";
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar  Data Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-8">
    <h1>Ubah Data Artikel</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $art['id'];?>">
        <input type="hidden" name="gambarLama" value="<?= $art['gambar'];?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Gambar</label><br>
            <img src="images/<?= $art ['gambar']; ?>" width="80"> 
            <input type="file" class="form-control" id="gambar" name="gambar" > 
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $art ['judul']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">isi</label>
            <input type="text" class="form-control" id="isi" name="isi" value="<?= $art ['isi']; ?>">
        </div>
        <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>