<?php
// baca kedua bilangan
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];

// proses perhitungan
if (isset($_POST['penjumlahan'])){
    $op = $_POST['penjumlahan'];
    $hasil = $bil1 + $bil2;
} else if (isset($_POST['pengurangan'])){
    $op = $_POST['pengurangan'];
    $hasil = $bil1 - $bil2;
} else if (isset($_POST['perkalian'])){
    $op = $_POST['perkalian'];
    $hasil = $bil1 * $bil2;
} else if (isset($_POST['pembagian'])){
    $op = $_POST['pembagian'];
    $hasil = $bil1 / $bil2;
} else if (isset($_POST['pangkat'])){
    $op = $_POST['pangkat'];
    $hasil = pow($bil1, $bil2);
}
// menampilkan hasil perhitungan
echo "<h2>".$bil1." ".$op." ".$bil2." = ".$hasil."</h2>";
?>