<?php 

// ketika pengunjung submit nama
if (isset($_POST['submit'])){
    // mengeset cookie username dari namanya, lama cookie 3 bulan
    setcookie("username", $_POST['username'], time()+3*30*24*3600, "/");
    // mengeset cookie jumlah kunjungan-> 0 (awal-awal)
    setcookie("visits", 0, time()+3*30*24*3600, "/");
    // mengeset cookie kunjungan terakhir
    setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600, "/");

    // redirect ke myapp.php
    header("LocationL:myapp.php");
}

// jika sudah ada cookie username sebelumnya
if (isset($_COOKIE['username'])){
    // menampilkan nama user dari cookie
    echo "<p>Hallo, selamat datang " . $_COOKIE['username'] . "</p>";
    // menampilan jumlah kunjungan saat ini = jumlah visit sebelumnya + 1
    echo "<p>Ini kunjungan Anda yang ke-". ($_COOKIE['visits'] + 1)."</p>";
    // menampilkan datetime kunjungan sebelumnya, baca dari cookie
    echo "<p>Kunjungan Anda sebelumnya adalah pada tanggal " . $_COOKIE['lastvisit'] . "</p>";

    // melakukan update cookie yang baru, setelah membaca cookie sebelumnya
    setcookie("username", $_COOKIE['username'], time()+3*30*24*3600, "/");
    setcookie("visits", $_COOKIE['visits']+1, time()+3*30*24*3600, "/");
    setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600, "/");

    echo "<p><a href='destroy.php'>destroy</a></p>";

} else {
    // jila username belum ada, munculkan form
?>

<h1>Welcome to my site</h1>
<p>Ini kunjungan Anda pertama kali disitus ini ya?</p>
<p>Kita kenalan dulu ya, silakan masukkan nama anda</p>
<form action="myapp.php" method="POST">
    Nama Anda <input type="text" name = "username">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
}

?>