<?php
require('ecommerce.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV Atoms Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style2.css">
</head>

<body>

    <section id="header" class="bb">
        <h2>
            <font size="6" color="black">EV Atoms Store</font>
        </h2>


        <div>
            <ul id="navbar">
                <li><a class="active" href="ecommerce.html">HOME</a></li>
                <li><a href="shop.html">SHOP</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="cart.html"><i class="fa-solid fa-bag-shopping fa-2x"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="hello">
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
    <section id="feature" class="section-p1">

        <div class="option">
            <a href="#"><img class="a1" src="Engine.png" alt=""></a>
            <h6>Engine Parts</h6>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="option">
            <a href="#"><img src="Steering.png" alt=""></a>
            <h6>Steering</h6>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="option">
            <a href="#"><img src="Brakes.png" alt=""></a>
            <h6>Brake System</h6>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="option">
            <a href="#"><img class="aa" src="speaker.png" alt=""></a>
            <h6>Speaker</h6>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="option">
            <a href="#"><img src="Engine.png" alt=""></a>
            <h6>Engine Parts</h6>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



    </section>

    <section id="product" class="section-p1">
        <h3>Top Deals for you</h3>
        <div class="product-1">
            <?php
            contient('3A FEATURETAIL', 'Combo of Parking Assistance 4.3 Inch Tft LCD Monitor + 8LED Reverse Camera for Cars + Reverse Parking Sensor White', '₹2149', 'ca1.jpg');
            contient('JBL Store', 'JBL Gto609C 540 Watt Woofer, Surround Sound Speaker', '₹8999', 'sp1.jpg');
            contient("DRIVABLY PRO EXPERIENCE", "Drivably Pro 9 Inches Universal Car Android 2GB Ram 16GB ROM with IPS Display Gorilla Glass with Android 10.1", "₹5949", "sc2.jpg");
            contient("MOMO", "Black Plastic And Metal MOMO Car Steering Wheel", "₹8681", "st1.jpg");
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg");
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg");
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg");
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg");
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
            contient('3A FEATURETAIL', 'Combo of Parking Assistance 4.3 Inch Tft LCD Monitor + 8LED Reverse Camera for Cars + Reverse Parking Sensor White', '₹2149', 'ca1.jpg');
            contient('JBL Store', 'JBL Gto609C 540 Watt Woofer, Surround Sound Speaker', '₹8999', 'sp1.jpg');
            contient("DRIVABLY PRO EXPERIENCE", "Drivably Pro 9 Inches Universal Car Android 2GB Ram 16GB ROM with IPS Display Gorilla Glass with Android 10.1", "₹5949", "sc2.jpg");
            contient("MOMO", "Black Plastic And Metal MOMO Car Steering Wheel", "₹999", "st1.jpg");
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg");
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg");
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg");
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg");
            ?>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>