<?php
    include "connecte.php";
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $sql="DELETE FROM students WHERE id = $id";
        $query=mysqli_query($conn , $sql);
        header('location:Student.php');
    }
?>