<?php
    include ('connecte.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $password = $_POST['password'];
        if($pass == $password){
            $sql="SELECT * FROM comptes WHERE email='$email' AND username='$name'";
            $query=mysqli_query($conn , $sql);
            $result=mysqli_fetch_assoc($query);
            if($result){
                echo("This compte is arrely existed");    
            }else{
                $sql2 = "INSERT INTO comptes (username, email, password) VALUE ('$name', '$email', '$pass')";
                $query = mysqli_query($conn , $sql2);
                die("Your account is arrely created");   
            }
        }else{
            echo("Confirm your password");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>SING IN</title>
</head>
<html>
<body style="background-image: linear-gradient(to right, #01c1fe , #f8fec1);">
    <main style="max-width: 500px; height:480px; border-radius: 10px; background-color: white; margin: auto; margin-top: 20px;" class="form-signin pt-3 h-auto" >
        <form action="" method="post">
            <h2 class="border-start border-4 border-info ms-4">E-classe</h2>
            <h4 style="font-size: 50px; text-align: center;" class="mb-3 fw-normal">sign up</h4>

            <div style="margin: auto; width: 80%; color: gray;" class="Enter">
                <div class="Name">
                    <label for="usr">name</label>
                    <input name="name" style="margin-top: 10px" type="text" class="form-control" id="usr" placeholder= "name">
                </div>
                <div class="Name">
                    <label for="usr">Email</label>
                    <input name="email" style="margin-top: 10px" type="email" class="form-control" id="usr" placeholder= "Enter your email">
                </div>
                <div >
                    <label for="usr">password</label>
                    <input name="pass" style="margin-top: 10px" type="password" class="form-control" id="usr" placeholder= "Enter your password">
                </div>
                <div class="password">
                    <label style="margin-top: 20px" for="psw">confirmation</label>
                    <input name="password"  type="password" class="form-control" id="psw" placeholder= "Enter your password">
                    <div class="form-group">
                        <input type="checkbox" name="remember" class="mt-3">
                        <label for="remember-me">remember me</label>
                    </div>
                    <button name="submit" style="margin-top: 20px; background-color: #00C1FE" class="w-100 btn btn-lg " type="submit" >Sign up</button>
                    <div style="width: 40%; margin:0 auto;">
                        <a href="signinn.php" class="text-center text-muted" style="text-decoration: none;">Sign in here</a>
                    </div>
                </div>
            </div>
        </form>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
