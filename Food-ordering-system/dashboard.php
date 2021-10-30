<?php
session_start();
include'config.php';
 $branname=$_SESSION['brand'];
 $sql="SELECT * FROM `brand1` WHERE brandname='$branname'"OR die("Query failed on line 3");
 $run=mysqli_query($conn,$sql) OR die("Error on line 5");
  $result=mysqli_fetch_assoc($run);
  $branid=$result['brandid'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      #back{
        background: rgba( 23, 3, 3, 0.40 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 8.0px );
        -webkit-backdrop-filter: blur( 8.0px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
      }
      body{
        background-image: linear-gradient(to right top, #030b16, #163547, #116279, #0094a6, #0cc9c9);
      }
      .back2{
            background: rgba( 37, 2, 43, 0.65 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.50 );
            backdrop-filter: blur( 12.0px );
            -webkit-backdrop-filter: blur( 12.0px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            }
            a{
              text-decoration:none;
              color:white;
            }
    </style>

    <title>Dashboard</title>
  </head>
  <body>
    <div class="container" style="margin-top:60px;height:100vh;">
      <div class="container" id="back">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="logo" style="height:250px;padding-left:20%;padding-top:20px;">
                <img src="images/<?php echo $result['logo']?>" class="img-fluid" style="border-radius:50%;height:80%;border:2px solid white;">
                <p><a href=""><i class="fas fa-edit" style="color:white;"></i></a></p>
              </div>
            </div>
            <div class="row" style="color:ghostwhite; height:200px;">
              <div>
              <a href="addproduct.php?id=<?php echo $result['brandid']; ?>"><h4 class="back2" style="text-align:center;">Add Product</h4></a>
              <h4 class="back2" style="text-align:center">Update Product</h4>
              <h4 class="back2" style="text-align:center"><a href="currentorder.php"class="nav-link" style="color:ghostwhite">Current Order</a></h4>
              <h4 class="back2" style="text-align:center"><a href="businesslogout.php" class="nav-link" style="color:ghostwhite">Log Out</a></h4>
            </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="back2" style="margin-top:30px;">
              <table class="table">
                    <thead style="color:ghostwhite;">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Type</th>
                        <th scope="col">Image</th>
                      </tr>
                    </thead>
                    <tbody style="color:ghostwhite;">
                      <?php
                        $sql1="SELECT * FROM `product` WHERE brandid='$branid' "OR die("Query failed on line 78");
                        $run1=mysqli_query($conn,$sql1) OR die("Query failed on line 79");
                        if(mysqli_num_rows($run1)>0){
                          while($result1=mysqli_fetch_assoc($run1)){

                      ?>
                      <tr>
                        <th scope="row"><?php echo $result1['name'];?></th>
                        <td><?php echo $result1['price'];?></td>
                        <td><?php echo $result1['quantity'];?></td>
                        <td><?php echo $result1['type'];?></td>
                        <td><img src="images/<?php echo $result1['img'];?>" style="height:60px;"></td>
                      </tr>
                      <?php
                          }
                        }
                      ?>
                    </tbody>
                 </table>
            </div>
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