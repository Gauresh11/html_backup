<?php  

session_start();

//print_r($_SESSION['finalcart']);
if(!isset($_COOKIE['username_mini2'])) {
   //uour profile
   echo "<script>alert('login in first to continue')</script>";
   //echo"<script>alert('')</script> ";
   echo "<script>window.location = 'login11.php'</script>";
   //header("location: login11.php");
    // echo "Cookie named 'username_mini2' is not set!";
  } 
  
?>