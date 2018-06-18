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

        <?php printLogInOutButton(); ?>

        <input type="text" placeholder="Search product..">

    </div>

    <div class="char">
        <h1>Product characteristics</h1>
        <img src="../Images/tea.jpg" alt="Fuze tea" width="100">
        <p><span>Common name:</span> Thé Noir Glacé au Citron et Citronnelle</p>
        <p><span>Quantity:</span> 500 ml</p>
        <p><span>Packaging:</span> Bouteille, Plastique, PET</p>
        <p><span>Brands:</span> Fusetea</p>
        <p><span>Categories:</span> Beverages, Artificially sweetened beverages, Iced teas, Lemon flavored iced teas, Sugared beverages, Thés noirs glacés</p>
        <p><span>Labels, certifications, awards:</span> Made in Italy, With sweeteners</p>
        <p><span>Manufacturing or processing places:</span> Italie</p>
        <p><span>Countries where sold:</span> France, Switzerland</p>
        <p><span>Ingredients list:</span> Eau, sucre, fructose, acidifiant : acide citrique , extrait de thé (0,12 %), jus de citron a partir de concentré (0,1 %), correcteur d'acidité : citrate de sodium, arômes naturels, anti-oxydant : acide ascorbique, extrait de citronnelle (0.01 %), édulcorant : glycosides de stéviol.</p>
        <p><span>Additives:</span> E330(Citric acid),E331(Sodium citrates)</p>
    </div>

    <p><a href="#" class="export">Export Data</a></p>






</body>

</html>
