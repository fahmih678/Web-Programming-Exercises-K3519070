<?php 

function hitungGaji($gol, $masaKerja){
    if($gol == "A"){
        if($masaKerja < 10){
            $gaji = 5000000;
        } else {
            $gaji = 7000000;
        }
    } elseif ($gol == "B") {
        if ($masaKerja < 10) {
            $gaji = 6000000;
        } else {
            $gaji = 8000000;
        }
    }

    return $gaji;
}

echo "Golongan B, 11 thn kerja mendapat gaji : Rp. " .hitungGaji("B", 11);

?>