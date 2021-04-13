<?php 
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tglLahir = $_POST['tgllahir'];
    $tmpLahir = $_POST['tmplahir'];

    $namaFile = "datamhs.dat";
    $openFile = fopen($namaFile, "a") or die("Tidak bisa dibuka");
    fwrite($openFile, $nim."|".$nama."|".$tglLahir."|".$tmpLahir."\n");
    fclose($openFile);
    echo "data berhasil tersimpan";

?>