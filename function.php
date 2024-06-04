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
    mysqli_query($conn, "INSERT INTO users VALUES('$fullname', '$username', '$email','$password', '0')");

    return mysqli_affected_rows($conn);

}

function tambah($data) {
    global $conn;

// upload gambar
    $gambar= upload();
    if( !$gambar) {
        return false;
    }
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);

    $query = "INSERT INTO artikel
    VALUES
    (null, '$gambar', '$judul', '$isi')
    ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
  $namafile = $_FILES['gambar']['name'];
  $ukuranfile = $_FILES['gambar']['size'];
  $error = $_FILES ['gambar']['error'];
  $tmpname = $_FILES['gambar']['tmp_name'];

//   cek apakah tidak ada gambar yang diupload
if ( $error === 4) {
    echo "<script>
    alert('pilih gambar terlebih dahulu')
    </script>";

    return false;
}

    // cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
             alert('yang di upload bukan gambar')
             </script>";
        
           return false;
    }
    // cek jika ukurannya terlalu besar 
    if ($ukuranfile > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar')
        </script>";

        return false;
    }

    // generate gambar baru
    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $ekstensiGambar;

    // gambar di upload
    move_uploaded_file($tmpname, 'images/' . $namaFilebaru);

    return $namaFilebaru;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM artikel WHERE id = $id");
    return mysqli_affected_rows($conn);
    
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $gambar = htmlspecialchars($data["gambar"]);
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);

    // $gambarLama = htmlspecialchars($data["gambarLama"]);
    $gambarLama = query("SELECT * FROM artikel WHERE id='$id'")[0];
    // var_dump($_FILES['gambar']['error']);
   
// cek apakah pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama['gambar'];
        // echo "$gambarLama";
    } else {
        $gambar = upload();
    }

    
    $query = "UPDATE artikel SET
    gambar = '$gambar',
    judul = '$judul',
    isi = '$isi'
    WHERE id = $id
    ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM artikel
    WHERE
    judul LIKE '$keyword%'
    ";

    return query($query);
}

// menguji status user
function cek_status($nama) {
    global $conn;

    $nama = escape($nama);

    $query = "SELECT role FROM user WHERE username='$nama'";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($result)['role'];

    die($status);
    return $status;


}


