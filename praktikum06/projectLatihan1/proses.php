<?php 

// users terdaftar
$users = array(
    array("username1", "Singgit Wionartop", "123456"),
    array("username2", "Dona Maharani", "123123"),
    array("username3", "Aris Sasongko", "234234")
);

// jika form login tersubmit
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // mengecek username & password apakah terdaftar
    foreach($users as $profile_user){
        if(($profile_user[0] == $username) && ($profile_user[2] == $password)){
            // jika terdaftar, set cookie
            setcookie("namauser", $profile_user[1], time() + 3600, "/");

            // redirect halaman ke page1.php
            header("Location:page1.php");
        }
    }

    // jika tidak akun terdaftar
    echo "<h3>Login gagal</h3>";
    echo "<p>Silakan <a href='login.php'>Login kembali</a></p>";

}

?>