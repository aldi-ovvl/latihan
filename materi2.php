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

// Contoh perulangan for nested (for i c)
echo "<h3>Contoh Perulangan For Nested (i dan c):</h3>";
for ($i = 1; $i <= 3; $i++) {
    for ($c = 1; $c <= 3; $c++) {
        echo "i=$i, c=$c <br>";
    }
}

// Contoh perulangan while
echo "<h3>Contoh Perulangan While:</h3>";
$i = 1;
while ($i <= 5) {
    echo "Nilai while: $i <br>";
    $i++;
}

// Contoh perulangan do-while
echo "<h3>Contoh Perulangan Do-While:</h3>";
$i = 1;
do {
    echo "Nilai do-while: $i <br>";
    $i++;
} while ($i <= 5);
