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

        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="news.php">News</a>
        <a href="contact.php">Contact</a>
        <a href="about.php" class="active">About</a>

        <?php printLogInOutButton(); ?>

        <input type="text" placeholder="Search product..">
    </div>

    <div class="banner">
        <div class="inline-block">
            <img src="images/img1.png">
            <p>Open Food Facts is a database of food products with ingredients, allergens, nutrition facts and all the tidbits of information we can find on product labels.</p>
        </div>


        <div class="inline-block">
            <img src="images/img1.png">
            <p>Data about food is of public interest and has to be open. The complete database is published as open data and can be reused by anyone and for any use. Check-out the cool reuses or make your own!
            </p>
        </div>

        <div class="inline-block">
            <img src="images/img2.jpg">
            <p>Open Food Facts is a non-profit association of volunteers.
            </p>
        </div>
    </div>


</body>

</html>
