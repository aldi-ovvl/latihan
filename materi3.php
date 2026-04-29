<?php
function salam()
{
    echo "assalamu'alaykum";
}
salam();

function bagi(int $a,int $b)
{
    $jumlah = $a / $b;
    echo $jumlah;
}
bagi (4,6);
?>

<form method ="post">
    <input type="number" name="angka1">
     <input type="number" name="angka2">
     <button type="submit" name="kirim">kirim</button>
</form>


<?php
if (isset($_POST['kirim'])){
    $angka1 =$_POST['angka1'];
    $angka2 =$_POST['angka2'];
    bagi ($angka1,$angka2);
}
?>
