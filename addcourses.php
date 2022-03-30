<?php
  include ("verification.php");
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
                    <p class="text-center text-secondary fs-4 fw-bold">ADD NEW COURSES</p>
                </div>
                <div class=" name  mx-auto w-75">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" style="border-radius: 10px;" class="form-control bg-info" id="name"  required>
                        <label for="name" class="text-nowrap">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" style="border-radius: 10px;" class="form-control bg-info" id="email" name="lenght"  required>
                        <label for="email" >lenght</label>
                    </div>
                  
                    <input class="btn btn-secondary w-25 mx-auto d-block" type="submit" name="save">
                    <!-- <input class="btn btn-primary mx-auto d-block" type="submit" value="Submit"> -->
                    <!-- <button type="submit" class="p-1 w-25 mx-auto d-block" style="border:none; background-color:royalblue; border-radius:5px;">submit</button> -->

                </div>
            </form>

        </div> 
    </div>
</div>

<?php
 include 'connecte.php';
  if(isset($_POST['save'])){
    $name = $_POST['name'];
    $lenght = $_POST['lenght'];

  $insert="INSERT INTO courses (name,lenght) VALUES ('$name','$lenght')";
  $query=$conn->query($insert);

  }
?>

</body>
</html>

