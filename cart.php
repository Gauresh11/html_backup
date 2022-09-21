<?php  
session_start();
require('config.php');
require('ecommerce.php');
if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
  }
  if (isset($_POST['mod_qut'])){
    if ($_GET['action'] == 'add'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                $_SESSION['cart'][$key]['quantity']=$_POST['mod_qut'];
                //echo "<script>alert('Product has been Removed...!')</script>";
               // print_r($_SESSION['cart']);
                //echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
  }
  if (isset($_POST['cod'])){  
    $_SESSION['finalcart']=$_SESSION['cart'];
    header("location: cod.php");
    }
?>
<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #cart_count {
            text-align: center;
            padding: 0 0.9rem 0.1rem 0.9rem;
            border-radius: 3rem;
        }

        .shopping-cart {
            padding: 3% 0;
        }

        .cart-items+.cart-items {
            padding: 2% 0;
        }

        .price-details h6 {
            padding: 3% 2%;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV Atoms Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php
    require_once('header.php');
    ?>
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Cart</h6>
                    <hr>

                    <?php

                    $total = 0;
                    $number=0;
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        //$result = $db->getData();
                       /* $sql = "SELECT * FROM test";
                        if ($result = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    foreach ($product_id as $id) {
                                        if ($row['id'] == $id) {
                                            cartElement($row['product_title'], $row['product_price'], $row['product_img'], $row['id'],1)
                                            $total = $total + (int)$row['product_price'];
                                            $number=$number+1;
                                        }
                                    }
                                }
                            }
                        }*/
                        $keys = array_keys($_SESSION['cart']);
                        //print_r($keys);
                        foreach ($keys as $id){
                    cartElement($_SESSION['cart'][$id]['title'],$_SESSION['cart'][$id]['price'],$_SESSION['cart'][$id]['img'],$_SESSION['cart'][$id]['product_id'],$_SESSION['cart'][$id]['quantity']);
                        }
                } else {
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            } else {
                                echo "<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6  id="gg"></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6 id="ggg">
                                </h6>
                            
                                <form  method="post">
                            
                              <button class='btn btn-primary' name ='cod'>buy now</button>      
                           
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script>
                    var boxes = document.getElementsByClassName('iprices');
                    var quantity=document.getElementsByClassName('iquant');
                    var it = document.getElementsByClassName('itotal');
                    var g = document.getElementById('gg');
                    var gggg = document.getElementById('ggg');
                    var sum=0;
                    function subtotal()
                    {   sum=0;
                        for(var i=0; i<boxes.length; i++)
                        {
                            it[i].innerText=(boxes[i].value)*(quantity[i].value);
                            sum=sum+((boxes[i].value)*(quantity[i].value));
                        }
                        g.innerText=sum;
                        gggg.innerText=sum;
                        console.log(sum);
                    }
                
                    subtotal();               
</script>

</html>
