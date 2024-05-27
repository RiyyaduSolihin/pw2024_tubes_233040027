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
            <div class="input-group"><input type="text" placeholder="username" name="username"></div>
            <div class="input-group"><input type="password" placeholder="password" name="password"></div>
            <div class="input-group"><input type="submit" name="login" value="login"class="btn"></div>
            <p class="login-register-text">Tidak memiliki akun ?
                <a href="register.php">Register</a>
             <p class="login-register-text">untuk login ke halaman Admin
                <a href="login.php">Login admin</a>
            </p>
        </form>
    </div>
</body>
</html>