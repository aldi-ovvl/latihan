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

<table border="1">
<tr>
        <th>ID User</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>

    </tr>

<?php
$sql = "SELECT * FROM user";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $password = isset($_POST['password']) ? $_POST['password'] : '';
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td><a href='materi4.php?id=" . $row["id"] . "'>Hapus</a> | Edit</td>";
        echo "</tr>";
    }
}
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE id = '$id'";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>
</table>
