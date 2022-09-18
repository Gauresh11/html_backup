<?php
session_start();
function logout() {
    session_destroy();
    header("location: login11.php");
}
if (array_key_exists('log', $_POST)) {
    logout();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EV Atoms Store</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .dropbtn {
            
            color: white;
            
            font-size: 16px;
            border: none;
            cursor: pointer;
            width:30px;
            height:30px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h5 class="logo">EV Atoms</h5>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ECOMMERCE</a></li>
                    <li><a href="#">MAPS</a></li>
                    <li><a href="#">INSTALLATION</a></li>

                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
            <div class="dropdown"><a href="#"><span> <img src="avatar\1663524530.png" width="30px" height="30px"></span> <i></i></a>
               
                <div class="dropdown-content">
                    <a href="profile.php">Details</a>
                    <!-- <li><a href="#">Drop Down 2</a></li> -->
                    <!--  Use to create dropdown options  -->
                    <a href="live chatting/index.php">Live chat</a>
                    <a href="logout.php">Log Out</a>
                </div>
            </div>
        </div>
        <div class="content">
            <h1><br>Electric Car Accessories, Parts & <br><span>Charging Station</span></h1><br>
            <p class="par" style="font-size: 140%;">"Transportation is transforming and we need to get ready"

            <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-James
                Campbell</h4>
                <?php  
                
                if (isset($_COOKIE['username_mini2'])) {
                    // true, cookie is set
                    echo '<h1>User is ' . $_COOKIE['username_mini2'].'</h1>';
                
                    }
                else 
                {
                    // false, cookie is not set
                    echo '<h1>User is not logged in</h1>';
                }
                
                
                ?>
            </p>
            <button id="show" class="cn"><a href="login1.html">LOGIN</a></button>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="">
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        var x = document.getElementById("show");
        var sesion = '<?php echo  $_SESSION['username_mini']; ?>'
        var ses = '<?php
                    if (!isset($_SESSION["username_mini"])) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                    ?>'
        //alert(sesion);
        if (ses === 0) {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    </script>
</body>

</html>