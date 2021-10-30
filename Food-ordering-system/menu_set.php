
<?php
session_start();
include'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Brand</title>
  </head>
  <body>
         <div class="box" style="background-image:url('images/banner.jpg'); height:400px">
                <div class="heading">
                        <h1 style="color: white; font-family:arial;font-weight:600;text-align:center; padding-top:100px;margin-left:200px;">EAT24</h1>
                        <h3 style="color:white;font-family:arial-bold;font-weight:600; text-align:center;margin-left: 300px;margin-top:40px;"> &mdash; Nothing Brings People Together Like Good Food &mdash; </h3>
              </div>
          </div>
       <div class="container" style="margin-top:100px;">
        <div class="row">
             <?php
                  $id=$_GET['id'];
                  $sql="SELECT * FROM `product` WHERE brandid='$id'" or die("Query faiiled on line 25");
                  $run=mysqli_query($conn,$sql) or die("Quety failed on line 26");
                  if(mysqli_num_rows($run)>0){
                  while($result= mysqli_fetch_assoc($run)){


                ?>
            <div class="col-md-4">
               
                <!--start of card-->
                    <div class="card" style="width: 18rem;">
                            <img src="images/<?php echo $result['img'];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                 <h5 class="card-title"><?php echo $result['name'];?></h5>
                                <p class="card-text"><?php echo $result['price'];?></p>
                                <a href="order.php?id=<?php echo $result['pid'];?>" class="btn btn-outline-danger">Order</a>
                            </div>
                            </div>
                <!--End of card-->
            </div><!--End of col-md-->
               <?php }
                    } ?>
        </div><!--End of row-->
           
       </div><!--End of container-->

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

