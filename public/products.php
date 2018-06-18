<?php

$inSite = false;
require_once ("boot.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../support/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../support/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../support/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../support/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/libraries-main.css">
    <link rel="stylesheet" type="text/css" href="css/libraries-util.css">

    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div>
        <div>
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

        </div>
        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">

                    <div class="table100 products m-b-110">
                        <div class="table100-head">
                            <table>
                                <thead>
                                <tr class="row100 head">
                                    <th class="cell100 exp-column1">Name</th>
                                    <th class="cell100 exp-column2">Quantity</th>
                                </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="table100-body js-pscroll">
                            <table>
                                <tbody id="list">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        var userId = <?php printUserId(); ?>;
    </script>

    <script src="../support/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="../support/vendor/bootstrap/js/popper.js"></script>
    <script src="../support/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../support/vendor/select2/select2.min.js"></script>
    <script src="../support/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="javascript/products.js"></script>

    <script src="javascript/libraries-main.js"></script>

</body>

</html>
