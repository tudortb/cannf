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

        <a href="index.php" class="active">Home</a>
        <a href="products.php">Products</a>
        <a href="news.php">News</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>

        <?php printMenuButtons(); ?>

        <input type="text" placeholder="Search product..">

    </div>

    <h2>CanF gathers information and data on food products from around the world.
        <p><a href="products.php" class="button">Get Started</a></p>
    </h2>





</body>

</html>
