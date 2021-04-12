<?php

$namaFile = "myfile.txt";
$myfile = fopen($namaFile, "w") or die("Tidak bisa buka file!");
fwrite($myfile, "DOS = Disk Operating System\n");
fwrite($myfile, "AISEM = Anak Islam Suka Membaca\n");
fclose($myfile);

?>