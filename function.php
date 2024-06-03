<?php
// function koneksi
$conn =  mysqli_connect("localhost", "root", "", "pw2024_tubes_233040027");
// return $conn;



function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }

    return $rows ;
}

// function tambah($data)
// {
//     $conn = koneksi();
//     $gambar = htmlspecialchars ($data ['gambar']);
//     $judul = htmlspecialchars ($data ['judul']);
//     $isi = htmlspecialchars($data ['isi']);
    
    
//     $query= "INSERT INTO artikel
//               VALUES (null,  '$gambar', '$judul', '$isi')
//               ";
    
//     mysqli_query($conn, $query) or die(mysqli_error($conn));

//     return mysqli_affected_rows($conn);
// }

function register($data)
{
    global $conn ;

    $fullname = htmlspecialchars ($data ['fullname']);
    $username = strtolower (stripslashes ($data ['username']));
    $email = htmlspecialchars($data ['email']);
    $password = mysqli_real_escape_string($conn, $data ['password']);

    // cek username
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if ( mysqli_fetch_assoc($result) ) {
                echo "<script>
                alert ('username sudah terdaftar!')
                </script>";
    }

    // enkripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('$fullname', '$username', '$email','$password')");

    return mysqli_affected_rows($conn);

}

function tambah($data) {
    global $conn;

    $gambar = htmlspecialchars($data["gambar"]);
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);

    $query = "INSERT INTO artikel
    VALUES
    (null, '$gambar', '$judul', '$isi')
    ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM artikel WHERE id = $id");
    return mysqli_affected_rows($conn);
}



