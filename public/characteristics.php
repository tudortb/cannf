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
        <a href="about.php">About</a>

        <?php printMenuButtons(); ?>

        <input type="text" placeholder="Search product..">

    </div>

    <div class="char">
        <h1>Product characteristics</h1>
        <p><span>Name: </span><span id="name"></span></p>
        <p><span>Quantity: </span><span id="quantity"></span></p>
        <p><span>Ingredients: </span><span id="ingredients"></span></p>
        <p><span>Allergens: </span> <span id="allergens"></span></p>
        <p><span>Packaging: </span> <span id="packaging"></span></p>
        <p><span>Preparation Tool: </span> <span id="preparation_tool"></span></p>
        <p><span>Preparation Instructions: </span> <span id="preparation_instructions"></span></p>
        <p><span>Storage Information: </span> <span id="storage_info"></span></p>
        <p><span>Validity: </span> <span id="validity"></span></p>
        <p><span>Where sold: </span> <span id="where_sold"></span></p>
        <p><span>Category: </span> <span id="category"></span></p>
        <p><span>Brand: </span> <span id="brand"></span></p>
    </div>

    <?php printProductButtons(); ?>

    <script>
        var userId = <?php printUserId(); ?>;
        var productId = <?php echo $_GET['productId']; ?>;
    </script>

    <script src="../support/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="javascript/characteristics.js"></script>

</body>

</html>
