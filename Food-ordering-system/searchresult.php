<?php
include"config.php";
 if(isset($_GET['submit']))
 {
  $searchkey=$_GET['key'];
  $sql="SELECT * FROM `product` WHERE name='$searchkey' OR type= '$searchkey'" Or die("Query is incorrect");
  $run=mysqli_query($conn,$sql) or die("Query failed") ;
  if(mysqli_num_rows($run)>0){

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Search Result</title>
  </head>
  <body>
    <div class="container-fluid">
      <img src="images/search.jpg"  class="img-fluid" style="width:100%; height:450px;margin-left:-10px;"> 
      <h1 class="text-center" style="margin-top:-200px;color:white;">Here is Your Serach Result</h1>
      <div class="d-grid gap-2 col-6 mx-auto" style="width:200px;">
      <a href="index.php"><button class="btn btn-danger " style="margin-top:20px;">Back to Home</button></a>
    </div>
    </div>
    <div class="container" style="margin-top:100px;">
      <div class="row">
        <?php
          while ($result=mysqli_fetch_assoc($run)) {
          
        ?>
        <div class="col-md-3">
          <div class="card" style="width: 15rem;border-radius:30px;">
          <img src="images/<?php echo $result['img'];?>" class="card-img-top" alt="..." style="border-radius:30px;">
          <div class="card-body">
            <h5 class="card-title"><p><?php echo $result['name'];?><?php echo $result['price'];?></p></h5>
            <a href="#" class="btn btn-outline-danger">Order</a>
          </div>
        </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php
   }else{
    echo"No Result Found";
   }
  } 
  ?>
    

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