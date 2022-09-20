<?php
session_start();
require('ecommerce.php');
require('create.php');
require('config.php');
if (isset($_POST['add'])) {
    //print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if (in_array($_POST['product_id'], $item_array_id)) {
            //$added = "item is already added in a cart";
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'ecommerce1.php'</script>";
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

    <link rel="stylesheet" href="style2.css">
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
</head>

<body>
    <?php
    require('header.php');
    ?>

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
            $sql = "SELECT * FROM test";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        contient($row['product_title'], $row['product_des'], $row['product_price'], $row['product_img'], $row['id']);
                    }
                }
            }

            //contient('JBL Store', 'JBL Gto609C 540 Watt Woofer, Surround Sound Speaker', '₹8999', 'sp1.jpg');
          /*  contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg", 5);
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg", 5);
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg", 5);
            */?>
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
            $sql = "SELECT * FROM test";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        contient($row['product_title'], $row['product_des'], $row['product_price'], $row['product_img'], $row['id']);
                    }
                }
            }
            //contient('JBL Store', 'JBL Gto609C 540 Watt Woofer, Surround Sound Speaker', '₹8999', 'sp1.jpg');
            /*contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg", 5);
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg", 5);
            contient("3A FEATURETAIL", "Reverse Camera for Cars", "₹2149", "ca1.jpg", 5);
            */?>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>
<script>
    function myFunction() {
        var number = document.getElementById("number").value;

        alert(number);
    }
</script>