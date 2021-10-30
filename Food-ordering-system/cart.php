<?php
 session_start();
 include'config.php';

 #This query is to get user id
     $Userid=$_SESSION['username'];
    $sql3="SELECT id FROM users WHERE username='$Userid'" OR die('query failed on line 72');
    $run3=mysqli_query($conn,$sql3) OR die('query failed on line 73');
    $result3=mysqli_fetch_assoc($run3);
    $user=$result3['id'];
    #End of query to get user id

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Cart</title>
  </head>
  <body>
      <div class="container" style="border:4px solid red">
      	<div class="row">
      		<div class="col-md-12">
      			    <table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Image</th>
						      <th scope="col">Product Name</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Price</th>
						      <th scope="col" colspan="2">Operation</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
 								$sql="SELECT * FROM `order` INNER JOIN  `product` ON order.pid=product.pid WHERE uid=$user"OR die("Query failed on line 41");
 								$run=mysqli_query($conn,$sql) OR die("Query failed on line 42");
 								if(mysqli_num_rows($run)>0){
 									while($result=mysqli_fetch_assoc($run)){
						  	?>
						    <tr>
						      <th scope="row"><img src="images/<?php echo $result['img'];?>" style="height:100px;"></th>
						      <td><?php echo $result['name'];?></td>
						      <td><?php echo $result['p_quantity'];?></td>
						      <td><?php echo $result['amount'];?></td>
						      <td><a href="deletecart.php?id=<?php echo $result['pid'];?>"><i class="fas fa-trash-alt" style="color:red;"></i></a></td>
						      <td><a href="">Pay</a></td>

						    </tr>
						  </tbody>
						  <?php }}?>
				</table>
      	</div>
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