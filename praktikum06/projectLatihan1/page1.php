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

    <h2>Selamat Datang, <?php echo $_COOKIE['namauser']; ?></h2>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>