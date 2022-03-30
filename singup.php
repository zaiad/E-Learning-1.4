<?php 
session_start();
include "connecte.php";
if(isset($_POST['name']) && isset($_POST['email'])
    && isset($_POST['password']) && isset($_POST['pass'])){
    
$name=$_POST['name'];
$email=$_POST['email'];
$passw=$_POST['password'];
$pass=$_POST['pass'];
$id=$_POST['id'];

// $user_data = 'name='. $name. '&email='. $email;
// echo  $user_data;

if (empty($name)) {
    header("location:register.php?error=User Name is required");
    exit();
}else if (empty($email)) {
    header("location:register.php?error=your email is required");
    exit();
}
else if (empty($passw)) {
    header("location:register.php?error=password your email is required");
    exit();
}
else if (empty($pass)) {
    header("location:register.php?error=re passowrd your email is required");
    exit();
}
?>