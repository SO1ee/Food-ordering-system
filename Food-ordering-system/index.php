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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/logo.png" type="image/icon">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
 
/* css style for navbar */
/*End css style for navbar*/

    <title>Online Food Ordering System</title>
  </head>
  <body>
    <!--Start of navbar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-md-top" style="background-color:;background:rgba(0,0,0,0,0.4);margin-top:-100px;">
  <div class="container-fluid">
    <!--<a class="navbar-brand" href="#">Navbar</a>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php" style="color:ghostwhite"><i class="fas fa-user" style="color:deeppink; font-size:28px;"></i><sup style="color:white;font-size:20px;"><?php
          if(isset($_SESSION['username'])) {
            echo $_SESSION['username'];
          }else{
            echo"Hii User";
          }?></sup></a>
        </li>
        <?php
        if(isset($_SESSION['username'])){
          echo'<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php" style="color:ghostwhite"><i class="fas fa-sign-in-alt" style="font-size:28px; color:deeppink;"></i></a>
        </li>';
      }else{

      }
        
        ?>
        <?php
        if(isset($_SESSION['username']))
        {?>
           <a href="cart.php" ><li class="nav-item" style="padding-left:20px;margin-top:6px;"><i class="fas fa-shopping-cart" style="color:deeppink;font-size:28px;"><sup>
           <?php #This query is to get user id
                $Userid=$_SESSION['username'];
                $sql3="SELECT id FROM users WHERE username='$Userid'" OR die('query failed on line 72');
                $run3=mysqli_query($conn,$sql3) OR die('query failed on line 73');
                $result3=mysqli_fetch_assoc($run3);
                $user=$result3['id'];
                #End of query to get user id
                $sql5="SELECT * FROM `order` WHERE uid=$user" OR die("query failed on line 64");
                $run5=mysqli_query($conn,$sql5) OR die("query failed on line 65");
                $totalrows=mysqli_num_rows($run5);
                echo $totalrows;
          ?>
        </sup></i>
        </li></a>
      <?php }
        ?>
      </ul>
    </div>
  </div>
</nav>
<!--End of navbar-->
    <!--<div class="sc-1ly0uwc-0 kisdcd sc-kxynE fmjsHI" color="#E23744">
    </div>-->
    <div class="sc-fwNAQS hHwmbF ">

      <div class="sc-jGxEUC YPCnq" height="calc(100vh-30rem)" width="100%">
        <div class="low-res-container">
          <img src="images/b1.jfif" class="low-res-image" alt role="presentation">
        </div>
        <img src="images/b1.jfif" class="high-res-image" alt role="presentation">
      </div>
      <div class="contents-wrapper">
      <!--  <div class="sc-jGxEUC fgDZcL logo" height="6rem" width="30rem">
          <div class="low-res-container">
            <img src="images/logo.webp" class="low-res-image" alt role="presentation">
          </div>
          <img src="images/logo.webp" class="high-res-image" alt role="presentation">
        </div>--><!--Block logo-->
        <h1 class="sc-7kepeu-0 kYnyFA description" style="font-family: 'Alfa Slab One', cursive; font-size:4rem;">EAT 24</h1>
        <h1 class="sc-7kepeu-0 kYnyFA description">Discover the best Food in Kolkata</h1>
        <div class="searchContainer"><form class="d-flex" action="searchresult.php" method="get">
        <input class="form-control me-2" name="key" type="search" placeholder="Search...." aria-label="Search" style="width:300px; border-radius:20px;">
        <button class="btn btn-outline-light" name="submit" type="submit"><i class="fas fa-search"></i></button>
      </form></div>

      </div>
    </div>
    <!--Start of  brand-->
    <div class="container" style="margin-top:30px;">
      <div class="row">
        <?php
         $sql="SELECT * FROM `brand1`";
         $run=mysqli_query($conn,$sql);
         if(mysqli_num_rows($run)>0){
          while($result=mysqli_fetch_assoc($run)){
          ?>
        <div class="col-md-3">
          <div class="card" style="width: 10rem; border-radius:50%;">
              <a href="menu_set.php?id=<?php echo $result['brandid'];?>"><img src="images/<?php echo $result['logo']?>" class="card-img-top"style="border-radius:50%;"></a>
          </div>
        </div>'
      <?php
       }
       } ?>
        
      </div>
    </div>
    <!--End of brand-->
    <!--Start of menu-->
    <div class="container" style="margin-top:50px;">
     <div class="row">
      <?php
      $sql1="SELECT * FROM `product` WHERE quantity= 4";
      $run2=mysqli_query($conn,$sql1);
      while($result1=mysqli_fetch_assoc($run2)){
          ?>
      <div class="col-md-3">
        <div class="card" style="width: 15rem;border-radius:30px;">
          <img src="images/<?php echo $result1['img']?>" class="card-img-top" alt="..." style="border-radius:30px;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $result1['name'];?><p>Price-<?php echo $result1['price'];?>
            </p></h5>
            <a href='order.php?id=<?php echo $result1['pid'];?>'class="btn btn-outline-danger">Order</a>
          </div>
        </div>
      </div>
     <?php }?>
      
     </div>
    </div>
    <!--End of menu-->
    <!--Start of footer-->
     <footer style="background-color:black;">
        <div class="container" style="background-color:black;height:300px;">
          <div class="row" style="margin-top:20px;">
            <div class="col-md-6" style="margin-top:40px;margin-bottom:40px;">
              <h1 style="color:white">EAT<span style="color:green;">24</span></h1>
              <img src="./images/apple-store.svg" alt="" style="margin-top:60px;"/>
              <img
                src="./images/playstore.png"
                height="40px"
                alt=""
                class="ml-4"
              style="margin-top:60px;margin-left:20px;">
            </div>
            <div class="col-md-3" style="margin-top:40px;">
              <ul style="color:white;">
                <li ><a class="nav-link active"href="about.php"style="color:ghostwhite;">About Food Ordering System</a></li>
                <li><a class="nav-link active" href="#"style="color:ghostwhite;">Read our blog</a></li>
                <li><a class="nav-link active" href="#"style="color:ghostwhite;">Order now</a></li>
                <li><a class="nav-link active" href="Registration.php"style="color:ghostwhite;">sign up</a></li>
              </ul>
            </div>
            <div class="col-md-3" style="margin-top:40px;">
              <ul style="color:ghostwhite">
                <li style="color:ghostwhite;"><a class="nav-link active"href="#" style="color:ghostwhite;">Get Help</a></li>
                <li style="color:ghostwhite;"><a class="nav-link active" href="#" style="color:ghostwhite;">Read FAQS</a></li>
                <li style="color:ghostwhite;"><a class="nav-link active"href="partner1.html" style="color:ghostwhite">Want to be our Partner?</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container" id="horizontal" 
            style="border-bottom: 1px solid #fff;
                    border-bottom-width: 1px;
                    border-bottom-style: solid;
                    border-bottom-color: rgb(255, 255, 255);
                    padding-top: 1px;">
              
        </div>
        <div class="container" id="copyright" style="background-color:black;margin-top:30px;">
          <div class="row">
            <div class="col-md-6">
              <p style="color:ghostwhite;">Copyrights &copy; Food Ordering System All rights reserved</p>
              <p style="color:ghostwhite;">Designed by( Soma,Pinki,Sreejit)</p>
            </div>
            <div class="col-md-6">
              <i class="fab fa-twitter" style="color:ghostwhite;font-size: 30px;padding: 12px"></i>
              <i
                class="fab fa-instagram"
                style="color: ghostwhite; font-size: 30px;padding: 12px"
              ></i>
              <i class="fab fa-facebook-f" style="color: ghostwhite;font-size: 30px;padding: 12px"></i>
              <i class="fab fa-linkedin-in" style="color:ghostwhite;font-size: 30px;padding: 12px"></i>
              <i class="fas fa-phone-alt" style="color:ghostwhite;font-size: 30px;padding: 12px"></i>
            </div>
          </div>
        </div>
      </footer>
    <!--End of footer-->

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