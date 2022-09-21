<?php 
session_start();
require('ecommerce.php');
require('create.php');
require('config.php');
$_SESSION['link']="bike.php";
///echo ($_SESSION['link']);
if (isset($_POST['add'])) {
    //print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if (in_array($_POST['product_id'], $item_array_id)) {
            //$added = "item is already added in a cart";
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'bike.php'</script>";
            //print_r($item_array_id);
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
           // print_r($_SESSION['cart']);
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
       // print_r($_SESSION['cart']);
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
    <link rel="stylesheet" href="bike.css">
</head>

<body>
    <section id="header" class="bb">
        <h2>
            <font size="6" color="black">EV Atoms Store</font>
        </h2>


        <div>
            <ul id="navbar">
                <li><a class="active" href="ecommerce3.php">HOME</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping fa-2x"></i></a></li>
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
                <li class="sea">
                    <form action="" id ="search2">
                        <input type="search" id ="see23" placeholder="Search here ...">
                        <i class="fa fa-search"></i>
                    </form>
                </li>
            </ul>
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

    <section id="first" class="section-m1">
        <h1><strong>LARGEST MARKETPLACE</strong></h1>
        <h2>For Genuine Spare Parts</h2>
        <hr align="left" width="45%" color="white">
        <h3>With <span>competitive prices</span> on the best products the <br>industry has to offer, our range of in-car tech is the <br><span>ideal choice </span>for you.</h3>
        <button class="normal">Explore More</button>
    </section>

    <section id="product" class="section-p1">
        <h3>Top Deals for you</h3>
        <div class="product-1">
            <?php
            $sql = "SELECT * FROM test";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        contient($row['product_title'], $row['product_des'], $row['product_price'], $row['product_img'], $row['id'],$_SESSION['link']);
                    }
                }
            }
              contient("3A FEATURETAIL","Combo of Parking Assistance 4.3 Inch Tft LCD Monitor + 8LED Reverse Camera for Cars + Reverse Parking Sensor White","2149","ca1.jpg",7,$_SESSION['link']);
              contient("3A FEATURETAIL","Combo of Parking Assistance 4.3 Inch Tft LCD Monitor + 8LED Reverse Camera for Cars + Reverse Parking Sensor White","2149","ca1.jpg",8,$_SESSION['link']);

            ?>

        </div>

    </section>


</body>

</html>