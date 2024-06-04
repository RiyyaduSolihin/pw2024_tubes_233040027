<?php
session_start();
require 'function.php';

if(isset($_SESSION["login"]) ) {
   
if ($_SESSION["role"]==='1') {

    header("Location: hlmnadmin.php");
    exit;
} else {
    // $_SESSION["login"] = true;
    header("Location: index.php");
    exit;
}
}

  



if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result= mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    // cek mail
    if( mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if ( $password === $row["password"])  {
            // var_dump($row['role']);
            // die;
            // set session
            $_SESSION["login"] = true;
            if ($row["role"]==='1') {
                $_SESSION["role"] = '1';

                header("Location: hlmnadmin.php");
                exit;
            } else {
                $_SESSION["role"] = '0';
                // $_SESSION["login"] = true;
                header("Location: index.php");
                exit;
            }
          
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <p style="font-size: 2rem;font-weight:850;" class="login-text">Login</p>
        <form action="" method="POST" class="login-email">
            <div class="input-group"><input type="text" placeholder="email" name="email"></div>
            <div class="input-group"><input type="password" placeholder="password" name="password"></div>
            <div class="input-group"><input type="submit" name="login" value="login"class="btn"></div>
            <p class="login-register-text">Tidak memiliki akun ?
                <a href="register.php">Register</a>
        </form>
    </div>
</body>
</html>