<?php
session_start();
include 'config.php';
if(isset($_POST["submit"])){
  $user =$_POST['name'];
  $pass=$_POST['Password'];
   $sql="SELECT * FROM `users` WHERE username='$user' AND password='$pass'";
  $run=mysqli_query($conn,$sql) Or die('Query unsuccess');
  if(mysqli_num_rows($run)>0){
    while($result=mysqli_fetch_assoc($run)){

    $_SESSION['username']=$result['username'];
    header('Location:index.php');
    }
  }else{
    echo"<h4>Usere name Or Password is wrong </h4>";
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

    <title>Log in</title>
  </head>
  <body id="a">
    <div class="card"id="register">
      <div class="card-title">
        <h3 class="text-center">Log in</h3>
      </div>
      <div class="card-body">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" id="signup-form" method="post">
          <div class="form-group">
            <lavel for="signup-email">Enter UserName</lavel>
            <input type="text" class="form-control" name="name"id="signup-email" arial-describedby="emailHelp"placeholder="Enter-Username">
          </div>
          <div class="form-group">
            <label for="signup-password">Password</label>
            <input type="Password" name="Password" class="form-control" id="signup-password"placeholder="Password">
          </div>
          <button type="submit" class="btn btn-success"id="submit" name="submit">Login</button>
          <p class="pt-2">"Don't have Account?"
            <a href="Registration.php">Register</a></p>

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