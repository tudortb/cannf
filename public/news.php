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

        <?php printMenuButtons(); ?>

        <input type="text" placeholder="Search product..">

    </div>

    <div id = "list" class="news" style = "margin-left: 60px; margin-top: 60px"></div>


    <script>
        var userId = <?php printUserId(); ?>;
    </script>

    <script src="../support/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="javascript/news.js"></script>

</body>

</html>
