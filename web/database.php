<?php
 if (!isset($_SESSION)){
    session_start();
}


// mysql_connect berfungsi menghubungkan ke dalam database
// parameternya ($host, $username, $password, $namadatabase)
$conn = mysqli_connect("localhost","root","","website");

function registrasi($data){
    // memanggil global variable $conn
    global $conn;

    // strtolower digunakan untuk membuat inputan menjadi huruf kecil semua
    // stripslashes digunakan untuk menghilangkan strip
    // mysqli_real_escape_string digunakan agar password dapat menggunakan tanda petik
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // cek apakah username sudah ada atau belum
    // mysqli_query digunakan untuk menjalankan query
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    // mysqli_fetch_assoc digunakan untuk merubah hasil query menjadi associative array
    if(mysqli_fetch_assoc($result)) {
       # echo "<script>
           # alert('Username Sudah Terdaftar');
           # </script>";
            //membuat alert
        $_SESSION['gagal-registrasi'] = true;
        return false;
    }

    // cek konfirmasi password
    if($password != $password2) {
        #echo "<script>
         #   alert('Password Tidak Sama');
          #  </script>";
        //membuat alert
        $_SESSION['gagal-regist'] = true;
        return false;

    }

    // hash password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan data ke dalam database
    mysqli_query($conn, "INSERT INTO users VALUE ('', '$username', '$password')");

    // melihat apakah data berhasil ditambahkan
    return mysqli_affected_rows($conn);

}

function login($data){
    // memanggil global variable $conn
    global $conn;

    // memasukkan data ke dalam variable untuk meminimalisir penggunakan petik ''
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek username
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");

    // mysqli_num_rows menghitung ada berapa baris yang dikembalikkan oleh query $result
    if (mysqli_num_rows($result) === 1) {
        // cek password
        // mysqli_fetch_assoc digunakan untuk merubah hasil query menjadi associative array
        $row = mysqli_fetch_assoc($result);
        
        if(password_verify($password, $row['password'])){
            //kalo login berhasil
            $_SESSION['login'] = true;
            //session id
            $_SESSION['id'] = $row['id'];
            //membuat alert
            $_SESSION['berhasil-login'] = true;
            return;
        } else {
            echo "<script>
            alert('Username / Password Salah');
            </script>";
        }
    } else {
        echo "<script>
        alert('Username Salah');
        </script>";
    }

}

function tambah($data){
    global $conn;

    // htmlspecialchars mengizingkan tag html (contoh: <div>) dimasukkan seperti string biasa
    $data_nama = htmlspecialchars($data['data_nama']);
    $data_email = htmlspecialchars($data['data_email']);
    $data_bio = htmlspecialchars($data['data_bio']);

    //query insert ke database
    mysqli_query($conn, "INSERT INTO mahasiswa VALUE ('', '$data_nama', '$data_email', '$data_bio')");

    // melihat apakah data berhasil ditambahkan
    return mysqli_affected_rows($conn);

}


function update($data, $data_id) {
    global $conn;

    // htmlspecialchars mengizingkan tag html (contoh: <div>) dimasukkan seperti string biasa
    $data_nama = htmlspecialchars($data['data_nama']);
    $data_email = htmlspecialchars($data['data_email']);
    $data_bio = htmlspecialchars($data['data_bio']);

    //query update ke database
    mysqli_query($conn, "UPDATE mahasiswa SET data_nama = '$data_nama', data_email = '$data_email', data_bio = '$data_bio' WHERE id = '$data_id' ");

    // melihat apakah data berhasil ditambahkan
    return mysqli_affected_rows($conn);   
}


function hapus($data_id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = '$data_id' ");

    // melihat apakah data berhasil ditambahkan
    return mysqli_affected_rows($conn);
}

?>