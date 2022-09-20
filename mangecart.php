<?php

use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST['mod_qut']))
{
    foreach ($_SESSION['cart'] as $key => $value){
        if($value["product_id"] == $_GET['id']){
            $_SESSION['cart'][$key]['quantity']=$_POST['mod_qut'];
            print_r($_SESSION['cart'][$key]);
            //unset($_SESSION['cart'][$key]);
            //echo "<script>alert('Product has been Removed...!')</script>";
           echo "<script>window.location = 'cart.php'</script>";
        }
    }
}
}
?>
