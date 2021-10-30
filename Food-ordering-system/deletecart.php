<?php
session_start();
include'config.php';
$id=$_GET['id'];
$sql="DELETE  FROM `order` WHERE pid='$id'" or die("Query failed on line 4");
$run=mysqli_query($conn,$sql)or die("Query failed on line 5");
if($run){
	header("Location:cart.php");
}else{
	echo"Something went wrong";
}
?>