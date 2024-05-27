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
                <a class="nav-link" href="#trofi">Layanan</a>
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
      <p class="text-center" style="font-size: 2rem;">Liverpool adalah salah satu tim sepak bola  terbesar di inggris ataupun  dunia, yang berbasis di kota Liverpool. Didirikan pada tahun 1892 
      </p>
    </div>
  </div>
</div>

<!-- Artikel -->
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
 <h2 class="display-3"  style="font-family: sans-serif;" id="artikel">Artikel</h2>

 <!-- Tombol search -->
 <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search">
    <div class="input-group from-container">
      <input type="text" name="search" class="form-control search-input" placeholder="search">
      <span class="input-group-btn">
        <button class="btn btn-search">
          <img src="images/search.png" alt="" width="35">
        </button>
      </span>
    </div>
 </div>
 <div class="row pt-5 gx-4 gy-4">
  <div class="col-md-4 ">
    <div class="card" ;>
      <img src="images/miracle.jpg" class="card-img-top" 
      alt="">
      <div class="card-body">
        <h5 class="card-title">Fakta Menarik di balik Kejaiban istanbul</h5>
        <a href="" class="btn">Read more</a>
       
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <img src="images/arne.jpg" class="card-img-top" 
      alt="">
      <div class="card-body">
        <h5 class="card-title">Welcome Arne Slot, Pelatih baru liverpool</h5>
        <a href="" class="btn">Read more</a>
       
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <img src="images/liga.jpg" class="card-img-top" 
      alt="">
      <div class="card-body">
        <h5 class="card-title">Gelar pertama Liverpool di era Primier leageu</h5>
        <a href="" class="btn">Read more</a>
       
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <img src="images/klo.jpg" class="card-img-top" 
      alt="">
      <div class="card-body">
        <h5 class="card-title">Terimakasih Jurgen</h5>
        <a href="" class="btn">Read more</a>
       
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <img src="images/champions.jpg" class="card-img-top" 
      alt="balado">
      <div class="card-body">
        <h5 class="card-title">Sejarah liverpool di liga champions</h5>
        <a href="" class="btn">Read more</a>
       
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <img src="images/firmansah.jpg" class="card-img-top" 
      alt="balado">
      <div class="card-body">
        <h5 class="card-title">Trio Firmansah</h5>
        <a href="" class="btn">Read more</a>
       
      </div>
    </div>
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
<!-- logout  -->

<div class="container text-center pt-5 pb-5">
   The Kopites&copy; 2024
 </div>
    <!-- Java script -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>