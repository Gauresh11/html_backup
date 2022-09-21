<?php
session_start();
require('ecommerce.php');
require('create.php');
require('config.php');
$_SESSION['link']="ecommerce3.php";
if (isset($_POST['add'])) {
    //print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if (in_array($_POST['product_id'], $item_array_id)) {
            //$added = "item is already added in a cart";
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'ecommerce3.php'</script>";
            print_r($item_array_id);
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id'],
                'quantity' => 1,
                'desprction' => $_POST['desp'],
                'title' => $_POST['tit'],
                'price' => $_POST['price'],
                'img' => $_POST['img']

            );
            $_SESSION['cart'][$count] = $item_array;
           print_r($_SESSION['cart']);
        }
    } else {

        $item_array = array(
            'product_id' => $_POST['product_id'],
            'quantity' => 1,
            'desprction' => $_POST['desp'],
            'title' => $_POST['tit'],
            'price' => $_POST['price'],
            'img' => $_POST['img']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
       print_r($_SESSION['cart']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV Atoms Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="style2.css">
</head>
<body>

   <section id="header" class="bb">
    <h2><font size="6" color="black">EV Atoms Store</font></h2>
   

    <div>
        <ul id="navbar">
            <li><a class="active" href="ecommerce.html">HOME</a></li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="About.html">ABOUT US</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
            <li><a href="cart.html"><i class="fa-solid fa-bag-shopping fa-2x"></i></a></li>
            <span id="count_number">

                    <?php

                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                    } else {
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                    }
                    ?>
                </span>
            <li class="sea"><form action="" id ="search2">
                <input type="search" placeholder="Search here ...">
                <i class="fa fa-search"></i>
                </form></li>
        </ul>
    </div>
   </section>

   <section id="hello" >
    <div class="ani">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 40% off!</p>
        <button>Shop Now</button>
    </div>

   </section>

   <div class="cat">
        <h3>Search by Categories</h3>
    </div>

   <section id="features" class="section-p1">
    
    <div id="lax" class="options">
        <a href="car.html"><img class="a1" src="c1.1.jpg" alt=""></a>
        <h6>Car Spare Parts</h6>
    </div>&nbsp;

    <div class="options">
        <a href="bike.html"><img src="r1.1.jpg" alt=""></a>
        <h6 class="bike">Bike spare parts</h6>
    </div>&nbsp;
   </section>

   <section id="product" class="section-p1">
    <h3>Top Deals for you</h3>
    <div class="product-1">
    <?php
            $sql = "SELECT * FROM topdeal";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        contient($row['product_title'], $row['product_des'], $row['product_price'], $row['product_img'], $row['id'],$_SESSION['link']);
                    }
                }
            }
            ?>
    </div>

</section>
<section id="banner" class="section-m1">
    <h1><strong>LARGEST MARKETPLACE</strong></h1>
    <h2>For Genuine Spare Parts</h2>
    <hr align="left" width="45%" color="white">
    <h3>With <span>competitive prices</span> on the best products the <br>industry has to offer, our range of in-car tech is the <br><span>ideal choice </span>for you.</h3>
    <button class="normal">Explore More</button>
   </section>

   <section id="product" class="section-p1">
    <h3>New Arrivals</h3>
    <div class="product-1">
    <?php
            $sql = "SELECT * FROM new";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        contient($row['product_title'], $row['product_des'], $row['product_price'], $row['product_img'], $row['id'],$_SESSION['link']);
                    }
                }
            }
            ?>
         
         </div>

</section>
<!--bottom-->
<div class="bgcolor">
<footer class="section-p1">
 
     <div class="col">
         <h2>EV Atoms Store</h2>
         <h4>Contact Us</h4>
         <p><strong>Address: </strong> Mount Poinsur, S.V.P. Road, Borivali (West), Mumbai 400 103.</p>
         <p><strong>Phone: </strong>+91 9136951119</p>
         <p><strong>Hours: </strong> 10:00 - 18:00, Mon - Sat</p>
         <div class="follow">
             <h4>Follow Us</h4>
             <div class="icon">
                 <i class="fab fa-facebook-f"></i>
                 <i class="fab fa-twitter"></i>
                 <i class="fab fa-instagram"></i>
                 <i class="fab fa-pinterest-p"></i>
                 <i class="fab fa-youtube"></i>

             </div>

         </div>

     </div>
     <div class="col">
         <h4>About</h4>
         <a href="#">About Us</a>
         <a href="#">Delivery Information</a>
         <a href="#">Privacy Policy</a>
         <a href="#">Terms & Condition</a>
         <a href="#">Contact Us</a>
     </div>

     <div class="col">
         <h4>My Account</h4>
         <a href="#">Sign In</a>
         <a href="#">View Cart</a>
         <a href="#">My Wishlist</a>
         <a href="#">Tack My Order</a>
         <a href="#">Help</a>
     </div>

     <div class="colpay">
         <p>Secured Payment Gateway</p>
         <img src="pay.png" alt="">
     </div>

     <div class="copyright">
         <p>@ 2022, Tech2 etc - HTML css Ecommerce Template</p>
     </div>
</footer>
 </div>



 <script src="script.js"></script>
</body>



