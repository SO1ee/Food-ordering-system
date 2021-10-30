<?php
session_start();
include 'config.php';
if(isset($_POST['submit'])){
   $brandname=$_POST['brandname'];
   $fssaino=$_POST['fssaino'];
  $sql="SELECT * FROM `brand1` WHERE brandname='$brandname' AND fssaino='$fssaino'";
  $run=mysqli_query($conn,$sql);
  if(mysqli_num_rows($run)==1){
    $_SESSION['brand']=$_POST['brandname'];
    header('Location:dashboard.php');
  }else{
    echo"<h4>Brand Name or Fssai No is wrong</h4>";
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

    <title>Log in</title>
  </head>
  <body >
    <div class="container" style="background-image:url(images/coffee.jpg); height:500px;margin-top:60px;">
       <div class="row justify-content-sm-center">
         <div class="col-sm-3" style="background: rgba( 255, 219, 188, 0.35 );
                                    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                                    backdrop-filter: blur( 7.0px );
                                    -webkit-backdrop-filter: blur( 7.0px );
                                    border-radius: 10px;
                                    border: 1px solid rgba( 255, 255, 255, 0.18 );
                                    margin-top:100px;
                                    height:200px;">
           <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style="text-align:center;">
            <label for="brandname" style="font-size:20px;color:white;">Brand Name:</label><br>
            <input type="text" id="brandname" name="brandname" style="width:100%;border-radius:30px;border-color:white;"><br>
            <label for="fssaino" style="font-size:20px;color:white;">Fssai No:</label><br>
            <input type="password" id="fssaino" name="fssaino" style="border-radius:30px; border-color:white;width:100%;"><br><br>
            <button type="submit" name="submit" class="btn btn-outline-light">Submit</button>
          </form>
         </div>
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