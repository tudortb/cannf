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

<div class="char">
    <h1>Product characteristics</h1>
    <form action="update.php" method="post">
        <p><span>Name: </span><input type="text" id="name" name="name"></input></p>
        <p><span>Quantity: </span><input type="text" id="quantity" name="quantity"></input></p>
        <p><span>Ingredients: </span><input type="text" id="ingredients" name="ingredients"></input></p>
        <p><span>Allergens: </span> <input type="text" id="allergens" name="allergens"></input></p>
        <p><span>Packaging: </span> <input type="text" id="packaging" name="packaging"></input></p>
        <p><span>Preparation Tool: </span> <input type="text" id="preparation_tool" name="preparation_tool"></input></p>
        <p><span>Preparation Instructions: </span> <input type="text" id="preparation_instructions" name="preparation_instructions"></input></p>
        <p><span>Storage Information: </span> <input type="text" id="storage_info" name="storage_info"></input></p>
        <p><span>Validity: </span> <input type="number" id="validity" name="validity"></input></p>
        <p><span>Where sold: </span> <input type="text" id="where_sold" name="where_sold"></input></p>
        <br> Category
        <select id="category_id" name="category_id">
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
        <select id="brand_id" name="brand_id">
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
        <input type="hidden" value=<?php print('"' . $_GET['productId'] . '"'); ?> name="productId" />
        <br><input type="submit" value="Modify">
    </form>
</div>

<script>
    var userId = <?php printUserId(); ?>;
    var productId = <?php echo $_GET['productId']; ?>;
</script>

<script src="../support/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="javascript/modify.js"></script>

</body>

</html>
