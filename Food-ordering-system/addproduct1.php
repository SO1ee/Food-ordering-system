<?php
 session_start();
 include'config.php';
 if(isset($_POST['submit'])){
  echo "hi";
 }else{
  echo "not clicked";
 }
?>