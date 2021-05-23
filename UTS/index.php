<?php 

include('cek.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <h1>Page 1</h1>

    <h2>Hallo, <?php echo $_COOKIE['namauser']; ?>, selamat datang kembali di permainan ini!!!</h2>
    <p><a href="game.php">[Start Game]</a></p>
    <p><a href="logout.php">Bukan Anda???</a></p>
</body>
</html>