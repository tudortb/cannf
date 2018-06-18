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
        <a href="products.php" class="active">Products</a>
        <a href="news.php">News</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>

        <?php printLogInOutButton(); ?>

        <input type="text" placeholder="Search product..">

    </div>

    <p><a href="add.php" class="import">Add a product</a></p>

    <ul class="products">
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
        <li>
            <a href="characteristics.php">
                <div><img src="images/tea.jpg" width="100px" height="auto" alt="ton">
                </div>
                <span>Suc de lamaie</span>
            </a>
        </li>
    </ul>


</body>

</html>
