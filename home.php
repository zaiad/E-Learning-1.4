<?php
  include "connecte.php";
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
    <title>Home</title>
</head>
<body>
  <div id="container" class=" d-flex">
    <input class="d-none" id="check" type="checkbox">       
    <?php  
      include ('sidebar.php')
    ?>
    <div class="container">
    <?php  
      include ('navbar.php')
    ?>
      <section class="row mt-3">
        <article class="col-md-3  my-2">
          <div class="card">
            <div class="card-body text-start" style="background: #F0F9FF;">
              <i class="bi bi-mortarboard fs-1 text-info"></i>
              <p >Student</p>
              <p class="text-end  fs-3"><b>
                <?php
                $sql = "SELECT *FROM students";
                $query=mysqli_query($conn , $sql);
                $result=mysqli_num_rows($query);
                echo $result;
                ?>
              </b></p>
            </div>
        </article>
        <article class="col-md-3 my-2">
          <div class="card">
            <div class="card-body" style="background: #FEF6FB;">
              <i class="bi bi-bookmark fs-1 " style="color: #EE95C5;"></i>
              <p>Course</p>
              <p class="text-end fs-3"><b>13</b></p>
            </div>
        </article>
        <article class="col-md-3 my-2">
          <div class="card">
            <div class="card-body" style="background: #FEFBEC;">
              <i class="bi bi-currency-dollar fs-1" style="color: #00C1FE;"></i>
              <p>Payment</p>
              <p class="text-end fs-3 text-nowrap">
                <small style="font-size: 18px;" class="fw-bold">DHS</small>
                <strong>
                <?php
                  // $sql = "SELECT SUM(amount_paid) FROM payment_details";
                  // $query=mysqli_query($conn , $sql);
                  echo "1322";
                ?>
                </strong> </p>
            </div>
        </article>
        <article class="col-md-3 my-2">
          <div class="card">
            <div class="card-body" style="background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">
              <i class="bi bi-person fs-1  text-white "></i>
              <p style="color:white">Users</p>
              <p class="text-end fs-3"><b>
              <?php
                $sql = "SELECT *FROM comptes";
                $query=mysqli_query($conn , $sql);
                $result=mysqli_num_rows($query);
                echo $result;
                ?>
              </b></p>
          </div>
        </article>
      </section>
          </div>
        </div>
    </div>
</body>
</html>