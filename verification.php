<?php
  if(!isset($_COOKIE['email']) && !isset($_COOKIE['password'])){
    header("location:index.php");
  }
?>