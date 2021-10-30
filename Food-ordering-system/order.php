<?php
     session_start();
     include('config.php');
       if(isset($_SESSION['username']))
         {

          }else{
                header('Location:login.php');
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

    <title>Oreder page</title>
  </head>
  <body>
   <div class="container" style="margin-top:100px;">
     <div class="row">
      <div class="col-md-12">
        <div style="border:4px solid red">
          <div class="row">
          <?php
          $productid=$_GET['id'];
          $sql="SELECT * FROM `product` WHERE pid=$productid" or die("query failed");
          $run=mysqli_query($conn,$sql) or die("query didn't exectute");
          if(mysqli_num_rows($run)>0){
           while($result=mysqli_fetch_assoc($run)){
           ?>
          <div class="col-md-6" style="height:400px;">
            <img src="images/<?php echo $result['img'];?>" class="img-fluid" style="height:400px;">
          </div>
          <div class="col-md-6">
            <form action="" method="post">
                    <h1><?php echo $result['name']?></h1>
                    <h4> From-<?php 
                        $brand=$result['brandid'];
                        $sql1="SELECT * FROM `brand1` WHERE brandid=$brand" or die("Query didn't execute");
                        $run1=mysqli_query($conn,$sql1) or die("Didn't match");
                            if($run1){
                            $result1=mysqli_fetch_assoc($run1);
                            echo $result1['brandname'];
                            # }
                          ?></h4>
                     <h4><?php echo $result['type']?></h4>
                     <h4 style="color:red;"><?php echo $result['price']?></h4>
                     <input type="hidden" name="pid" value="<?php echo $result['pid'];?>">
                     <label for="quantity"><h4>Quantity</h4></label><br>
                     <input type="number" id="quantity"name="quantity" style="width:20%"><br><br>
                     <input type="hidden" name="price" value="<?php echo $result['price'];?>">
                     <input type="hidden"name="brand" value="<?php echo $result1['brandname'];?>">   
                      <button type="submit" name="submit" class="btn btn-danger"><?php if($result['quantity']>0){
                      echo"Available";}else{
                        echo"Not clicked";
                      }
                       }}}?></button>
              </form>
          </div>
        </div>
        </div>
      </div>
     </div>
   </div>
 <?php
   if(isset($_POST['submit'])){
    #This query is to get user id
     $Userid=$_SESSION['username'];
    $sql3="SELECT id FROM users WHERE username='$Userid'" OR die('query failed on line 72');
    $run3=mysqli_query($conn,$sql3) OR die('query failed on line 73');
    $result3=mysqli_fetch_assoc($run3);
    $user=$result3['id'];
    #End of query to get user id
    $ammount=$_POST['quantity'] * $_POST['price'];
    $Quan=$_POST['quantity'];
    $brandnamee=$_POST['brand'];
    #insert query to order table
    $sql4="INSERT INTO `order` (pid,uid,p_quantity,amount,status,brand)VALUES('$productid','$user',$Quan,$ammount,'NotDelivered','$brandnamee')" OR die('Query failde on line 85');
    $run4=mysqli_query($conn,$sql4) OR die('query failed on line 86');
    if($run4){
      header('Location:cart.php');
    }else{
      echo"Not inserted";
    }
    #End of insert query

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