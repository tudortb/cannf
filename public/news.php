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
        <a href="news.php" class="active">News</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>

        <?php printLogInOutButton(); ?>

        <input type="text" placeholder="Search product..">

    </div>

    <div class="news">
        <p>User #caner47 added a product 25 minutes ago . Check this out---><a href="characteristics.php">HERE</a>
            <p>Admin #admin256 modified a product 2 days ago. Check this out---><a href="characteristics.php">HERE</a>
    </div>




</body>

</html>
