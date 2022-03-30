<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>SING IN</title>
</head>
<html>
<body style="background-image: linear-gradient(to right, #01c1fe , #f8fec1);">
    <main style="max-width: 500px; height:480px; border-radius: 10px; background-color: white; margin: auto; margin-top: 40px;" class="form-signin pt-3" >
        <form action="aa.php" method="post">
            <h2 class="border-start border-4 border-info ms-4">E-classe</h2>
            <h4 style="font-size: 50px; text-align: center;" class="mb-3 fw-normal">sign in</h4>
            <?php if (isset($_GET['error'])){
                echo'
                    <div class="alert alert-danger w-75 text-center mx-auto p-2">
                        <strong>Danger!</strong> Email or Password is incorrect.
                    </div>
                ';
                }
                else{
                    echo '<p style="color: gray; text-align: center;">Enter your credentials to access your account</p>';
                }
            ?> 
            <div style="margin: auto; width: 80%; color: gray;" class="Enter">
                <div class="Name">
                    <label for="usr">Email</label>
                    <input name="email" style="margin-top: 10px" type="email" class="form-control" id="usr" placeholder= "Enter your email">
                </div>
                <div class="password">
                    <label style="margin-top: 20px" for="psw">Password</label>
                    <input name="password" style="margin-top: 10px;" type="password" class="form-control" id="psw" placeholder= "Enter your password">
                    <div class="form-group">
                        <input type="checkbox" name="remember" class="mt-3">
                        <label for="remember-me">remember me</label>
                    </div>
                    <button style="margin-top: 20px; background-color: #00C1FE" class="w-100 btn btn-lg " type="submit" name="submit">Sign in</button>
                    <div style="width: 40%; margin:0 auto;">
                        <a href="index.php" class="text-center text-muted" style="text-decoration: none;">Sign in</a>
                    </div>
                    <!-- <li style=" margin-top: 20px; text-align: center; list-style:none;">forgot your password? <a href="#" style="color:skyblue; padding: 0px 0px 5px 0px;"  class="btn">Reset password</a></li> -->
                </div>
            </div>
        </form>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

