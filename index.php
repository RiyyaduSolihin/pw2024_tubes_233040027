<?php

session_start();

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
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
    <title>The Kopites</title>

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- /Bootsrap -->

    <!-- Bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Css -->
    <link rel="stylesheet" href="css/halaman.css">
</head>
<body>
  
  <!-- Home -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="images/logo.png" width="15%"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tentang">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#trofi">Trofi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<div class="container-fluid banner" id="home">
    <div class="container text-center">
        <h4 class="display-6">SELAMAT DATANG</h4>
        <h3 class="display-1">#YNWA</h3>
    </div>
</div>

<!-- Tentang -->
<div class="container-fluid pt-5 pb-5">
  <div class="container">
    <h2 class="display-3 text-center" style="font-family: sans-serif;" id="tentang">Tentang</h2>
    <div class="clearfix pt-5">
      <p class="text-center" style="font-size: 1rem;">Liverpool adalah salah satu tim sepak bola  terbesar di inggris ataupun  dunia, yang berbasis di kota Liverpool. Didirikan pada tahun 1892 
      Pada kompetisi domestik, Liverpool telah memenangkan 19 Gelar Liga, 8 Piala FA, rekor 10 Piala Liga dan 16 Community Shield FA. Pada kompetisi internasional, Liverpool telah memenangkan 6 Piala Eropa, 3 Piala UEFA, 4 Piala Super UEFA—rekor terbanyak di Inggris—dan 1 Piala Dunia Antarklub FIFA. Liverpool memantapkan dirinya sebagai salah satu klub besar di tingkat domestik serta Eropa pada era 1970an dan 1980an, ketika Bill Shankly, Bob Paisley, Joe Fagan, dan Kenny Dalglish, memimpin klub untuk meraih 11 gelar Liga dan 4 Piala Eropa. Liverpool kemudian memenangkan kembali 2 Piala Eropa pada tahun 2005 dan 2019 di bawah pelatih Rafael Benitez dan Jürgen Klopp; Klopp kemudian memimpin Liverpool untuk meraih Gelar Liga ke-19 di tahun 2020, yang merupakan gelar liga pertama Liverpool di era Liga Utama Inggris.

Liverpool merupakan salah satu klub terkaya dan memiliki suporter yang cukup banyak di seluruh dunia. Liverpool memiliki sejarah persaingan yang panjang dengan klub sekotanya Everton dan juga dengan Manchester United. Persaingan dengan klub sekota terkenal dengan nama Derby Merseyside. Sedangkan dengan Manchester United di kenal dengan sebutan North West Derby.[3] Di bawah kepelatihan Bill Shankly, di tahun 1964 Liverpool merubah warna tim mereka dari baju merah dan celana putih menjadi baju dan celana merah yang hingga kini warna tersebut masih digunakan. Lagu Liverpool F.C. adalah "You'll Never Walk Alone".

Suporter dari Liverpool FC telah terlibat dalam dua tragedi besar sepak bola. Tragedi Heysel, di mana penggemar yang ingin melarikan diri dari kerusuhan terjepit dinding yang rubuh pada Final Piala Eropa 1995 di Brussels, yang menyebabkan 39 korban jiwa. Sebagian besar korban jiwa tersebut merupakan warga negara Italia dan penggemar Juventus. Liverpool diberikan larangan bertanding di kompetisi tingkat Eropa selama 6 tahun, dan semua klub Inggris selama 5 tahun. Tragedi kedua merupakan tragedi Hillsborough di tahun 1989, di mana 97 penggemar Liverpool menjadi korban jiwa akibat tertimpa pagar tribun, yang menyebabkan dilarangnya penggunaan pagar tribun dan mewajibkan stadion dengan tempat duduk untuk dua kasta tertinggi sepak bola Inggris. Kampanye panjang untuk meminta keadilan dari tragedi tersebut menyebabkan dilakukan kembali proses otopsi, dan pada akhirnya tuduhan terhadap penggemar sebagai penyebab tragedi tersebut digugurkan oleh komite pencari fakta dan panel independen.

Dalam sepanjang sejarah Premier League, Liverpool termasuk salah satu dari enam tim yang belum pernah terdegradasi.
      </p>
    </div>
  </div>
</div>

<!-- Artikel -->
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
 <h2 class="display-3"  style="font-family: sans-serif;" id="artikel">Artikel</h2>

 <!-- Tombol search -->

 <form action=""  method="POST">
    <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search">
    <div class="input-group from-container">
      <input type="text" name="keyword" class="form-control search-input" placeholder="search" autofocus autocomplate="off" id="keyword">
      <span class="input-group-btn">
        <button type="submit" name="cari" id="tombol-cari">
          <img src="images/search.png" alt="" width="35">
        </button>
      </span>
    </div>
 </div>
 </form>

 <div id="container">
 <?php $i = 1; ?>
 <div class="row pt-5 gx-4 gy-4 d-flex">
 <?php foreach ( $artikel as $row ) : ?>
  <div class="col-4" >
    <div class="card">
      <img src="images/<?= $row["gambar"]; ?>"class="card-img-top" 
      alt="">
      <div class="card-body">
        <h5 class="card-title"><?= $row["judul"]; ?></h5>
        <p><?= $row["isi"]; ?></p>

      </div>
    </div>
  </div>
  <?php $i++; ?>
    <?php endforeach; ?>
 </div>
 
  </div>
</div>
</div>

<!-- Trofi -->
<div class="container-fluid layanan pt-5 pb-5">
  <div class="container text-center">
    <h2 class="display-3" style="font-family: sans-serif;" id="trofi">Trofi</h2>
    <p></p>
    <div class="row pt-6">
      <div class="col-md-6">
        <span class="lingkaran"><img src="images/eropa.png" alt="" width="100%"></span>
        <h3 class="mt-3">champions</h3>
        <p> <br></p>
      </div>
      <div class="col-md-6">
        <span class="lingkaran"><img src="images/trofiliga.png" alt="" width="60%"></span>
        <h3 class="mt-3">Liga inggris</h3>
        <p> <br>
        </p>
      </div>
      <div class="col-md-6">
        <span class="lingkaran"><img src="images/fa.png" alt="" width="100%"></span>
        <h3 class="mt-3">Fa cup</h3>
        <p> <br>
        </p>
      </div>
      <div class="col-md-6">
        <span class="lingkaran"><img src="images/carabou.png" alt="" width="100%"></span>
        <h3 class="mt-3">Carabou cup</h3>
        <p> <br>
        </p>
      </div>
      <div class="col-md-6">
        <span class="lingkaran"><img src="images/dunia.png" alt="" width="100%"></span>
        <h3 class="mt-3">Piala dunia antar klub</h3>
        <p> <br>
        </p>
      </div>
      <div class="col-md-6">
        <span class="lingkaran"><img src="images/shield.png" alt="" width="100%"></span>
        <h3 class="mt-3">comunity shield</h3>
        <p> <br>
        </p>
      </div>
      <div class="col-md-6">
        <span class="lingkaran"><img src="images/super.png" alt="" width="50%"></span>
        <h3 class="mt-3">Piala super eropa</h3>
        <p> <br>
        </p>
      </div>
      <div class="col-md-6">
        <span class="lingkaran"><img src="images/uefa.png" alt="" width="70%"></span>
        <h3 class="mt-3">UEFA cup/Liga eropa</h3>
        <p> <br>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container text-center pt-5 pb-5">
   The Kopites&copy; 2024
 </div>
    <!-- Java script -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="js/script.js"></script>
</body>
</html>