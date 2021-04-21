<?php 

session_start();
$_SESSION['x'] = 10;
$_SESSION['y'] = 20;

echo $_SESSION['x']. "<br>";
echo $_SESSION['y'];

?>