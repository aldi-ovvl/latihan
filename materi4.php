<form method="POST">
    Username : <input type="text" name="username"><br><br>
    Password : <input type="password" name="password"><br><br>
    Nama : <input type="text" name="nama"><br><br>
    Email : <input type="email" name="email"><br><br>
    <button type="submit" name="kirim">kirim</button>
</form>

<?php

include "koneksi.php";

if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $pw = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (username, pw, nama, email) VALUES ('$username', '$pw', '$nama', '$email')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

