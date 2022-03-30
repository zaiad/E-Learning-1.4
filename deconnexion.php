<?php
    session_start();
    session_unset();
    setcookie('email' , $_SESSION['email'] , time()-60*60*24 , "/");
    setcookie('password' , $_SESSION['password'] , time()-60*60*24 , "/");
    session_destroy();
    header("location:index.php");
?>