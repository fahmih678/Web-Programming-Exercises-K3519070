<?php 

echo "phi = 3.14 <br>";

$luas = 3.14 * pow($_GET['d']/2, 2) * $_GET['t'];

echo "Luas Tabung " . $_GET['n'] . " dengan diameter " . $_GET['d'] . " dan tinggi " . $_GET['t'] . " adalah " . $luas . " satuan luas";

?>