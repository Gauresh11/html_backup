</header>
<section id="header" class="bb">
    <h2>
        <font size="6" color="black">EV Atoms Store</font>
    </h2>


    <div>
        <ul id="navbar">
            <li><a class="active" href="ecommerce1.php">HOME</a></li>
            <li><a href="shop.php">SHOP</a></li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-bag-shopping fa-2x"></i></a><span id="count_number">

                    <?php

                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                    } else {
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                    }
                    ?>
                </span></li>
        </ul>
    </div>
</section>
</header>