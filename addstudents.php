<?php
    include ("verification.php");

 include 'connecte.php';
  if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enroll= $_POST['enroll_number'];
    $date= $_POST['date_of_admission'];

  $insert="INSERT INTO students (name,email,phone,enroll_number,date_of_admission) VALUES ('$name','$email','$phone','$enroll','$date')";
  $query=mysqli_query($conn , $insert);
  header('location:Student.php');
  }
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

            <form action="addstudents.php" method="POST" class="bg-light w-75 mx-auto py-1 shadow p-3 mb-5 bg-body" style="border-radius: 20px;">
                <div>
                    <img src="img/username.png" alt="user" class="rounded-circle mx-auto d-block">
                    <p class="text-center text-secondary fs-4 fw-bold">ADD NEW STUDENT</p>
                </div>
                <div class=" name  mx-auto w-75">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" style="border-radius: 10px;" class="form-control bg-info" id="name" placeholder="name@example.com" required>
                        <label for="name" class="text-nowrap">Full name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" style="border-radius: 10px;" class="form-control bg-info" id="email" name="email" placeholder="name@example.com" required>
                        <label for="email" >Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" style="border-radius: 10px;" class="form-control bg-info" id="phone" placeholder="name@example.com" required name="phone">
                        <label for="phone" >Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" style="border-radius: 10px;" class="form-control bg-info" id="enroll_number" placeholder="name@example.com" required name="enroll_number">
                        <label for="enroll_number" class="text-nowrap">Enroll number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" style="border-radius: 10px;" class="form-control bg-info" id="date_of_admission" required name="date_of_admission">
                        <label for="date_of_admission" >Date</label>
                    </div>
                    <input class="btn btn-secondary w-25 mx-auto d-block" type="submit" name="save">
                    <!-- <input class="btn btn-primary mx-auto d-block" type="submit" value="Submit"> -->
                    <!-- <button type="submit" class="p-1 w-25 mx-auto d-block" style="border:none; background-color:royalblue; border-radius:5px;">submit</button> -->

                </div>
            </form>

        </div> 
    </div>
</div>

</body>
</html>

