<?php
session_start();

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
require 'function.php';
if( isset($_POST["submit"]) ) {



   if( tambah($_POST) > 0 ) {
    echo "
    <script>
      alert('data berhasil ditambahkan!');
      document.location.href = 'artikel.php';
    </script>
    ";
   } else {
    echo " <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'artikel.php';
  </script>
  ";
   }
  
}
// require 'function.php';
// //jika tombol tambah diklik
// if(isset($_POST['tambah'])) {
// // jika data berhasil ditambahkan
// if(tambah($_POST) > 0) {
//   echo "<script>
//   alert('data berhasil ditambahkan')
//   document.location.href = 'adminartikel.php';
//   </>";
// }
// }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
      background-image: url(./images/revisi.jpg);
    }
      h1 {
        font-family: 'cursive';
        font-weight: 700;
      }
      .form-label {
        font-weight: 500;
      }
    </style>
  </head>
  <body>
    <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 90vh;">
      <div class="col-8">
    <h1 class="text-center">Form Tambah Data Artikel</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">isi</label>
            <input type="text" class="form-control" id="isi" name="isi">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Tambah Data Artikel</button>
    </form>
    </div>
</div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>