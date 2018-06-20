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

        <?php printMenuButtons(); ?>

    </div>

    <div style = "margin-left:60px; margin-top:60px;">
        <form action="insert.php" method="post">
            Name:
            <input type="text" name="name">
            <br> Quantity
            <input type="text" name="quantity">
            <br> Ingredients
            <input type="text" name="ingredients">
            <br> Allergens
            <input type="text" name="allergens">
            <br> Packaging
            <input type="text" name="packaging">
            <br> Preparation Tool
            <input type="text" name="preparation_tool">
            <br> Preparation Instructions
            <input type="text" name="preparation_instructions">
            <br> Storage Information
            <input type="text" name="storage_info">
            <br> Validity (months)
            <input type="number" name="validity">
            <br> Where is it sold
            <input type="text" name="where_sold">
            <br> Category
            <select name="category_id">
                <?php
                $conn = $app -> getDatabaseAccess();

                $sql = "SELECT * FROM category WHERE 1 = 1";
                $result = $conn -> query($sql);
                $categories = convertSQLResult($result);

                foreach($categories as $category) {
                    print('<option value="' . $category['id'] . '">' . $category['name'] . '</option>');
                }

                ?>
            </select>

            <br> Brand
            <select name="brand_id">
                <?php
                $conn = $app -> getDatabaseAccess();

                $sql = "SELECT * FROM brand WHERE 1 = 1";
                $result = $conn -> query($sql);
                $brands = convertSQLResult($result);

                foreach($brands as $brand) {
                    print('<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>');
                }

                ?>
            </select>

            <br><input type="submit" value="Submit">
        </form>
    </div>






</body>

</html>
