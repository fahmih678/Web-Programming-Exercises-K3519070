<?php 

    if (isset($_COOKIE['namauser'])){
        header("Location:page1.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh</title>
</head>

<body>
    <h1>Login Cookie</h1>
    <form action="proses.php" method="POST">
        Username <input type="text" name="username" id="Username">
        Password <input type="password" name="password" id="">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>