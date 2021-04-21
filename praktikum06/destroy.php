<?php 

// menghapus cookie tersimpan
setcookie("username", '', time() - 3*30*24*3600, "/");
setcookie("visits", '', time() - 3*30*24*3600, "/");
setcookie("lasvisit", '', time() - 3*30*24*3600, "/");

// redirect ke halaman login
header("Location: myapp.php");

?>