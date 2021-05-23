<?php 

    if (isset($_COOKIE['namauser'])){
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>Login Game</h1>
    <form action="proses.php" method="POST">
        Nama    : <input type="text" name="name" id="name">
        <br>
        Email   : <input type="email" name="email" id="email" placeholder="email@gmail.com">
        <br>
        
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>