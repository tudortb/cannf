<?php

$inSite = false;
require_once ("boot.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/main.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="topnav" id="myTopnav">
        <div class="logo">
            <img src="images/tuna.png">
        </div>

        <a href="home.php">Home</a>
        <a href="products.php">Products</a>
        <a href="news.php">News</a>
        <a href="#contact" class="active">Contact</a>
        <a href="about.php">About</a>

        <?php printLogInOutButton(); ?>

        <input type="text" placeholder="Search product..">

    </div>

    <h3>By Phone (U.S.):
    </h3>h3> 1-800-330-7107
    <h3>By Mail (U.S.):</h3>
    Modern Corporation 4746 <br> Model City Road <br> PO Box 209 Model City, NY 14107
    <h3>By Mail (Canada):</h3>
    Modern Landfill Inc. of Ontario<br> 2025 Fruitbelt Parkway <br> Niagara Falls, Ontario L2E 6S4





</body>

</html>
