<?php  
session_start();
unset($_SESSION['cart']);
echo "<script>window.location = 'ecommerce3.php'</script>";
?>