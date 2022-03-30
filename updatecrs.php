<?php 

include "connecte.php";
include ("verification.php");
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query="SELECT * FROM courses WHERE id = $id";
    $result= $conn->query($query);
 if($result->num_rows>0){
     $row= $result->fetch_assoc();{
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Student</title>
</head>
<body>

<div id="container" class=" position-relative d-flex"> 

    <input class="d-none" id="check" type="checkbox">  



    <?php  

            include ('sidebar.php')

    ?>

    <div class="container">

        <?php  

                include ('navbar.php')

        ?>


        <div class="submit">

            <form action="" method="POST" class="bg-light w-75 mx-auto py-1 shadow p-3 mb-5 bg-body" style="border-radius: 20px;">
                <div>
                    <img src="img/username.png" alt="user" class="rounded-circle mx-auto d-block">
                    <p class="text-center text-secondary fs-4 fw-bold">UPDATE</p>
                </div>
                <div class=" name  mx-auto w-75">
                    <div class="form-floating mb-3">
                        <input type="text" value="<?php echo $row['name']?>" name="name" style="border-radius: 10px;" class="form-control bg-info" id="name" placeholder="name@example.com" required>
                        <label for="name" class="text-nowrap">name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="<?php echo $row['lenght']?>"  style="border-radius: 10px;" class="form-control bg-info" id="email" name="lenght" placeholder="name@example.com" required>
                        <label for="email" >lenght</label>
                    </div>
                    <button class="btn btn-secondary w-25 mx-auto d-block" type="submit" name="save">Save</button>


                </div>
            </form>

        </div> 
    </div>
</div>
<?php  }
}
}
 include 'connecte.php';
  if(isset($_POST['save'])){
    $name = $_POST['name'];
    $lenght = $_POST['lenght'];

  $insert="UPDATE `courses` SET `id`='null',`name`='$name',`lenght`='$lenght' WHERE id=$id";
  $query=$conn->query($insert);
  header('location:courses.php');
  }
?>

</body>
</html>
