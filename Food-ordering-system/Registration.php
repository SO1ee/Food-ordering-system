<?php
  include('config.php');
  if(isset($_POST["submit"])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobileno'];
    $address=$_POST['address'];
    $password=$_POST['Password'];
    $sql="INSERT INTO `users`(`username`, `email`, `mobile`, `address`, `password`) VALUES ('$username','$email','$mobile','$address','$password')";
    $run=mysqli_query($conn,$sql);
    if($run){
      echo "<h4 style='text-align:center;color:white;'>You are Successfully Registered with EAT24</h4>";
    }else{
      echo"Oppss!! something went wrong";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png" type="image/icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Register here</title>
  </head>
  <body id="a">
    <div class="card"id="register" style="margin-top:0px; height:100%;">
      <div class="card-title">
        <h3 class="text-center">Sign up</h3>
      </div>
      <div class="card-body" style="height:80%;">
        <form id="signup-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="margin-top:-10px;">
          <div class="form-group">
            <label for="username">Enter Username</label>
            <input type="text" class="form-control"id="username"name="username" value arial-describedby="emailHelp" placeholder="Enter username" required>
          </div>
          <div class="form-group">
            <lavel for="signup-email">Enter email</lavel>
            <input type="email" class="form-control" name="email"id="signup-email" arial-describedby="emailHelp"placeholder="Enter-email"required>
          </div>
          <div class="form-group">
            <lavel for="mobileno">Enter MobileNo</lavel>
            <input type="tel"pattern="[0-9]{3}[0-9]{4}[0-9]{3}" class="form-control" name="mobileno"id="mobileno" arial-describedby="emailHelp"placeholder="MobileNo"required>
          </div>
          <div class="form-group">
            <lavel for="address">Enter Address</lavel>
            <input type="text" class="form-control" name="address"id="address" arial-describedby="emailHelp"placeholder="Enter Address"required>
          </div>
          <div class="form-group">
            <label for="signup-password">Password</label>
            <input type="Password" name="Password" class="form-control" id="signup-password"placeholder="Password"required>
          </div>
          <button type="submit" name="submit" class="btn btn-success"id="submit">Signup</button>
          <p class="pt-2" style="margin-bottom:20px;">"Have an account?"
            <a href="Login.php">Login</a></p>

        </form>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>