<?php 
if (isset($_POST['delete'])){
  $id =$_POST['delete'];

  $dQuery ="DELETE FROM students WHERE id =?";
  $stmt = $conn-> prepare($dQuery);
  $stmt->bind_param('i', $id);
  if($stmt->execute()){
    $_SESSION['msg']= "succses";

  }
  $stmt->close();
  $conn->close();
  header("location: student.php");
}

?>