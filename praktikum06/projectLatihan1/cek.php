<?php 

if(!isset($_COOKIE['namauser'])){
    echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
    echo "<p><a href='login.php'>Login</a> dulu ya...</p>";

    // setelah memunculkan pesan di atas, selanjutnyadi break dengan exit()

    exit();
}


?>