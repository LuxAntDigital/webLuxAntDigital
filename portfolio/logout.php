<?php 
session_start();

if(isset($_GET['csrf']) && isset($_SESSION['token']) && $_GET['csrf'] == $_SESSION['token']){
    $_SESSION = [];
    session_destroy();
    header('Location: login.php');
}
else{
    header('Location: index.php');
}


?>