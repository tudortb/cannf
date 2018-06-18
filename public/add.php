<?php

$inSite = true;
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
        <a href="about.php">About</a>

        <?php printLogInOutButton(); ?>

        <input type="text" placeholder="Search product..">

    </div>

    <form action="/action_page.php">
        Name:
        <input type="text" name="name">
        <br> Quantity
        <input type="text" name="quantity">


        <form>
            Packaging:
            <input type="radio" name="packaging" value="Carton"> Carton
            <input type="radio" name="packaging" value="Pots"> Pots
            <input type="radio" name="packaging" value="Plastic"> Plastique
            <input type="radio" name="packaging" value="Other" checked>Other
        </form>

        Brands:
        <input type="text" name="brands">
        <br> Categories
        <input type="text" name="categories">
        <br> Stores:
        <input type="text" name="stores">
        <br> Countries where sold
        <input type="text" name="sold"><br>

        <br><input type="submit" value="Submit">
    </form>






</body>

</html>
