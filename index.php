<?php
session_start();
function logout()
{
    session_destroy();
    header("location: login11.php");
}
if (array_key_exists('log', $_POST)) {
    logout();
}
require_once 'config.php';

if (isset($_COOKIE['username_mini2'])) {
    // true, cookie is set
    $username2 = $_COOKIE['username_mini2'];
} else {
    // false, cookie is not set
    $username2 = null;
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
            width: 30px;
            height: 30px;
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
                    <li><a href="ecommerce3.php">ECOMMERCE</a></li>
                    <li><a href="#">MAPS</a></li>
                    <li><a href="#">INSTALLATION</a></li>

                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
            <div class="dropdown"><a href="#"><span> <?php $sql = "SELECT user_avatar FROM register_user WHERE user_email = '$username2'";
                                                        if ($result = mysqli_query($conn, $sql)) {
                                                            if (mysqli_num_rows($result) > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    echo  "<img src=" . $row['user_avatar'];
                                                                }
                                                            } else {
                                                                echo  "<img src='avatar\usern.png'";
                                                            }
                                                        }
                                                        ?> width="30px" height="30px"></span> <i></i></a>

                <div class="dropdown-content">
                    <a href="profile.php">Details</a>
                    <!-- <li><a href="#">Drop Down 2</a></li> -->
                    <!--  Use to create dropdown options  -->

                    <a href="logout.php">Log Out</a>
                </div>
            </div>
        </div>
        <div class="content">
            <h1><br>Electric Car Accessories, Parts & <br><span>Charging Station</span></h1><br>
            <p class="par" style="font-size: 140%;">"Transportation is transforming and we need to get ready"

            <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-James
                Campbell</h4>

            </p>
            <button id="show" class="cn"><a href="login11.php">LOGIN</a></button>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="">
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
<script>
    var x = document.getElementById("show");
    var ses = '<?php
                if (isset($_COOKIE['username_mini2'])) {
                    echo 1;
                } else {
                    echo 0;
                }
                ?>'
    //alert(ses);
    //x.style.display = 'none';
    if (ses == 1) {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
</script>

</html>