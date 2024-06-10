<?php
require '../function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM artikel
    WHERE
    judul LIKE '$keyword%'
    ";
$artikel = query($query);

?>
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