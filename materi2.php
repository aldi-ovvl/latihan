<form method="post">
    masukkan sebuah angka : <input type = "number" name = "angka">
    <input type="submit" value = "kirim">
</form>

<?php

if (isset($_post["angka"])) {
    $angka = $_post["angka"];

    for ($i = 1; $i <= $angka; $i++) {
        echo "<br>nilai anda:-$i"; 
    }
}

?>