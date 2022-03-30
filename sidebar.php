<nav id="sidebar" class="position-sticky top-0" style="height: 100vh;">
  <div class="sidebar-header ">
      <h3 class="fs-6 pt-3 ps-3"> <span>|</span> E-classe</h3> 
  </div>
  <div class="card w-100 mx-auto mt-4">
      <img src="img/youcode2.jpg " class="card-img-top rounded-circle w-50 mx-auto" alt="img">
      <div class="card-body mx-auto">
        <h5 class=" card-title fs-6 ">
          <?php
            session_start();
            echo $_SESSION['username'];
          ?>
        </h5>
        <p class="card-text text-center" style="color:#00C1FE;">Admin</p>
      </div>
  </div>
    <div class="list-group  mb-4 w-100">
      <div class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'home.php') echo "px-2 rounded";?>"><a href="home.php" class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'home.php') echo "bg-info";?> list-group-item list-group-item-action text-center" style="background-color:#FAFFC1; border: none;"> <i class="bi bi-house-door pe-3"></i>Home</a></div>
      <div class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'courses.php') echo "px-2 rounded";?>"><a href="courses.php" class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'courses.php') echo "bg-info";?> list-group-item list-group-item-action text-center" style="background-color:#FAFFC1; border: none;"><i class=" bi bi-mortarboard pe-3"></i>Courses</a></div>
      <!-- <a href="#" class="list-group-item list-group-item-action text-center" style="background-color:#FAFFC1; border: none;"><i class="bi bi-bookmark pe-3"></i>Course</a> -->
      <div class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'student.php') echo "px-2 rounded";?>"><a href="student.php" class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'student.php') echo "bg-info";?> list-group-item list-group-item-action text-center" style="background-color:#FAFFC1; border: none;"><i class=" bi bi-mortarboard pe-3"></i>Student</a></div>
      <div class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'payment.php') echo "px-2 rounded";?>"><a href="payment.php" class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'payment.php') echo "bg-info";?> list-group-item list-group-item-action text-center" style="background-color:#FAFFC1; border: none;"><i class=" bi bi-currency-dollar pe-3"></i>Payment</a></div>
      <a href="#" class="list-group-item list-group-item-action  text-center" style="background-color:#FAFFC1; border: none;"><i class="bi bi-file-earmark-bar-graph pe-3"></i>Report</a>
      <a href="#" class="list-group-item list-group-item-action  text-center" style="background-color:#FAFFC1; border: none;"><i class="bi bi-sliders pe-3"></i>Setting</a>
    </div>
    <a href="deconnexion.php" class="btn btn-primary btn-sm w-100 mt-5 " style="background-color:#FAFFC1; border: none; color: black;">logout <i class="bi bi-box-arrow-right ms-2"></i></a>
</nav>