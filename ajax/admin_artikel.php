<?php
require '../function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM artikel
    WHERE
    judul LIKE '$keyword%'
    ";
$artikel = query($query);

?>
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