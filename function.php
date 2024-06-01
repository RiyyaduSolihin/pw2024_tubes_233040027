<?php
function koneksi(){
$conn =  mysqli_connect("localhost", "root", "", "pw2024_tubes_233040027");
return $conn;
}


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }

    return $row ;
}

// function register($data)
// {
//     global $conn ;
//     $username = strtolower ($data ['username']);
//     $email = mysqli_real_escape_string($conn, $data ['email']);
//     $password = mysqli_real_escape_string($conn, $data ['password']);

//     // enkripsi password
//     $password = password_hash($password, PASSWORD_DEFAULT);

//     // tambahkan userbaru ke database
//     mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

//     return mysqli_affected_rows($conn);

// }

function register($data)
{
    global $conn ;
    $username = htmlspecialchars ($data ['username']);
    $email = htmlspecialchars($data ['email']);
    $password = htmlspecialchars($data ['password']);
    
    
    $query= "INSERT INTO user
              VALUES (null, '$username', '$email', '$password')
              ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
