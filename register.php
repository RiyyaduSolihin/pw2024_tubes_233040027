
<?php
require 'function.php'; 
if ( isset($_POST["register"]) ) {

  if( register($_POST) > 0 ) {
    echo "<script>
            alert('user baru berhasil ditambahkan!');
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}
//jika tombol tambah diklik
// if(isset($_POST['register'])) {
// jika data berhasil ditambahkan
// if(register($_POST) > 0) {
//   echo "<script>
//   alert('data berhasil ditambahkan')
//   </script>";
// }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem;font-weight:850;" class="login-text">Register</p>
            <div class="input-group"><input type="text" placeholder="fullname" name="fullname"></div>
            <div class="input-group"><input type="text" placeholder="username" name="username"></div>
            <div class="input-group"><input type="text" placeholder="email" name="email"></div>
            <div class="input-group"><input type="password" placeholder="password" name="password"></div>
            <div class="input-group"><button type="submit" name="register" class="btn">Register</button></div>
            <p class="login-register-text">Sudah Punya akun ?
                <a href="login.php">Login</a>
            </p>
        </form>
    </div>
</body>
</html>