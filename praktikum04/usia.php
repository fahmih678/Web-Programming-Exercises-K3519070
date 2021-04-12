<?php 

function hitungUsia($tglLahir){

    $Lahir = new DateTime($tglLahir);
    $hariIni = new DateTime("today");

    if ($Lahir > $hariIni) {
        exit ("0 tahun");
    }

    $y = $hariIni->diff($Lahir)->y;
    // $m = $hariIni->diff($Lahir)->m;
    // $d = $hariIni->diff($Lahir)->d;
    

    return $y." tahun";
}

?>