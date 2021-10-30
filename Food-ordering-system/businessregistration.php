<?php
include('config.php');
if(isset($_POST['submit'])){
       $brandname = $_POST['brand'];
       $fssaino = $_POST['fssai'];
       $Address = $_POST['address'];
       $Logo = $_FILES['logo']['name'];
       $sql1 =" INSERT INTO brand1( brandname,fssaino,address,logo) VALUES ('$brandname','$fssaino','$Address','$Logo')";
      $run = mysqli_query($conn,$sql1) or die("query field");
      if($run){
        echo '<h4 style="text-align:center;color:#5b0c1d">You are Successfully Registerd with Us</h4>';
      }else{
        echo "Upps!";
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
    <style>
      .glass{
        background: rgba( 255, 255, 255, 0.45 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 6.5px );
        -webkit-backdrop-filter: blur( 6.5px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        margin-top: 50px;
        height: 80%;
      }
    </style>

    <title>Add Your Brand</title>
  </head>
  <body>
    <div class="container">
      <div class="container" style="border: 3px solid #5b0c1d; margin-top:60px; height:600px;">
        <div class="row" style=" height:100%;">
          <div class="col-md-8">
            <img src="images/coffee2.jpg" style="margin-top: 8%; width:100%;">
          </div>
          <div class="col-md-4" style="background-color:#5b0c1d;">
            <div class="glass">
             <h4 style="color:ghostwhite;text-align:center;margin-top:10%;">Register</h4>

             <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" style="text-align:center; margin-top: 10%;">

              <label for="brand" style="color:ghostwhite;font-size:20px;"><B>Brand Name:</B></label><br>
              <input type="text" id="brand" name="brand" placeholder="Brand Name" style="border-radius:20px;border-color:#5b0c1d;"><br>

              <label for="fssai" style="color:ghostwhite;font-size:20px;"><B>Fssai No:</B></label><br>
              <input type="text" id="fssai" name="fssai" placeholder="Fssai No" style="border-radius:20px;border-color:#5b0c1d;"><br>

              <label for="address" style="color:ghostwhite;font-size:20px;"><B>Address:</B></label><br>
              <input type="text" id="address" name="address" placeholder="Address" style="border-radius:20px;border-color:#5b0c1d;"><br>

              <label for="file" style="color:ghostwhite;font-size:20px;"><B>Upload a Logo</B></label><br>
              <input type="file" name="logo" id="file" style="margin-left:25%; border-radius:20px;border-color:#5b0c1d;"><br><br>

              <button type="submit" class="btn btn-outline-light" name="submit">Submit</button>
              <p class="pt-2" style="margin-bottom:10px; color:ghostwhite;">"Have an account?"
            <a href="businesslogin.php" style="color:ghostwhite;">Login</a></p>
            </form>  
            </div>
          </div>
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