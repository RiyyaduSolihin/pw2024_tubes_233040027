<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:admin.php");
}
include("koneksi.php");
$username = "";
$password ="";
$err = "";
if (isset($_POST['login'])) {
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    if ($username == '' or $password == ''){
        $err .= "<li>Silahkan masukkan username dan password</li>";
    }
    if (empty($err)) {
        $sql1 = "select * from admin where username = '$username'";
        $q1 = mysqli_query($koneksi,$sql1);
        $r1 = mysqli_fetch_array($q1);
        if ($r1['password'] != md5($password)) {
            $err .= "<li>akun tidak ditemukan</li>";
        }
    }

    if(empty($err)) {
        $_SESSION['admin_username'] = $username;
        header("location:admin.php");
        exit();
    }

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
            <?php
            if ($err){
                echo "$err";
            }
            ?>
            <div class="input-group"><input type="text" value="<?php echo $username?>"placeholder="username" name="username"></div>
            <div class="input-group"><input type="password" placeholder="password" name="password"></div>
            <div class="input-group"><input type="submit" name="login" value="login"class="btn"></div>
            <p class="login-register-text">Tidak memiliki akun ?
                <a href="register.php">Register</a>
            </p>
        </form>
    </div>
</body>
</html>