<?php
$namaFile = "myfile.txt";
$myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
echo fgets($myfile)."<br/>";
echo fgets($myfile)."<br/>";

while(!feof($myfile)) {
    echo fgets($myfile)."<br/>";
}
fclose($myfile);
?>