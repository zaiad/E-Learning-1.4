<?php
include "connecte.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql="SELECT * FROM comptes WHERE email='$email' AND password='$password'";
$query=mysqli_query($conn , $sql);
$result=mysqli_fetch_assoc($query);
if($result){
    session_start();
    $_SESSION['username']=$result['username'];
    $_SESSION['email']=$result['email'];
    $_SESSION['password']=$result['password'];
    setcookie('email' , $_SESSION['email'] , time()+60*60*24 , "/");
    setcookie('password' , $_SESSION['password'] , time()+60*60*24 , "/");
    header("location:home.php");
}else{
    header("location:index.php?error=User Name or password is incorrect");
}