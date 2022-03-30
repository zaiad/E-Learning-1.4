<?php
    include "connecte.php";
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $sql="DELETE FROM courses WHERE id=$id";
        $query=mysqli_query($conn , $sql);
        header('location:courses.php');
    }
?>