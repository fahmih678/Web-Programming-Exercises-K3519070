<?php 

session_start();
if (isset($_SESSION['x'])){
    echo "ada session 'x' ";
} else {
    echo "Session 'x' tidak ada";
}

?>