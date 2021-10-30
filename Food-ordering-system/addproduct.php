<?php
 session_start();
 echo $_SESSION['brandid'];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ADD PRODUCT</title>
    <style>
     .back2{
            
            background: rgba( 0, 0, 0, 0.55 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8.0px );
            -webkit-backdrop-filter: blur( 8.0px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            border-radius: 10px;
            width:450px;
            text-align: center;
    </style>
  </head>
  <body style="background-color:lightseagreen;" >

                <div class="col offset-md-4" style="margin-top:100px;">
                <form class="back2"action="/action_page.php">
                    <label for="fname" style="color:white;font-size:20px; "><B>Brand id</B></label><br>
                    <input type="text" id="fname" name="fname" placeholder="xxxxxxx"><br>
                    <label for="lname" style="color:white;font-size:20px;"><B>Product Name</B></label><br>
                    <input type="text" id="lname" name="lname" placeholder="Product Name"><br>
                    <label for="fname" style="color:white;font-size:20px;"><B>Price</B></label><br>
                    <input type="text" id="fname" name="fname" placeholder="Price"><br>
                    <label for="lname" style="color:white; fomt-size:20px;"><B>Quantity</B></label><br>
                    <input type="text" id="lname" name="lname" placeholder="Quantity"><br>
                    <label for="fname" style="color:white;font-size:20px;"><B>Type</B></label><br>
                    <input type="text" id="fname" name="fname" placeholder="Type"><br>
                    <label for="lname" style="color:white;font-size:20px;"><B>Image</B></label><br>
                    <input type="text" id="lname" name="lname" placeholder="image"><br><br>
                    <input type="submit" value="Submit">
                </form>
             </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>