<?php 

function hitungDenda($tglHarusKembali, $tglKembali){

    // memecah input string $tanggalHarusKembali dibagi menjadi variabel tgl, bln, thn
    $break1 = explode("-", $tglHarusKembali);
    $date1 = $break1[2];
    $month1 = $break1[1];
    $year1 = $break1[0];

    // memecah input string $tanggalKembali dibagi menjadi variabel tgl, bln, thn
    $break2 = explode("-", $tglKembali);
    $date2 = $break2[2];
    $month2 = $break2[1];
    $year2 = $break2[0];

    // menghitung JDN dari masing-masing tanggal
    $jd1 = gregoriantojd($month1, $date1, $year1);
    $jd2 = gregoriantojd($month2, $date2, $year2);

    // mengitung selisih kedua tanggal
    $selisih = $jd2 - $jd1;
    
    // syarat mendapat denda tanggalKembali melewati tanggalHarusKembali
    if ($jd1 < $jd2){
        $denda = $selisih * 6000;
    } else {
        $denda = 0;
    }
    return $denda;
}

echo "Besarnya denda adalah: Rp " .hitungDenda("2021-01-03", "2021-02-05");

?>