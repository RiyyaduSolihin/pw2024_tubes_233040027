
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
            <li><a href="adminartikel.php">Halaman Artikel</a></li>
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
      <th scope="col">#</th>
      <th scope="col">fullname</th>
      <th scope="col">ussename</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
        <tr>
       <th scope="row"></th> 
      <td>fullname</td>
      <td>ussename</td>
      <td>email</td>
      <td>password</td>
      <td>
        <a href="" class="badge text-bg-warning text-decoration-none">ubah</a>
        <a href="" class="badge text-bg-danger text-decoration-none">Hapus</a>
      </td>
      
    </tr>
    
  </tbody>
</table>

</body>
</html>