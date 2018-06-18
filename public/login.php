<?php

$inSite = true;

require_once("boot.php");

if($_SESSION != NULL && isset($_SESSION['userId'])) {
    header("Location:index.php");
}
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = md5($username . $password);

    $conn = $app -> getDatabaseAccess();

    $sql = "SELECT * FROM user WHERE username = '" . $username . "' AND password = '" . $hash . "'";
    $result = $conn -> query($sql);
    $user = convertSQLResult($result);

    if(count($user) > 0) {
        session_start();
        $user = $user[0];
        $_SESSION['userId'] = $user['id'];
        header('Location:index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CannF Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../support/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../support/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../support/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../support/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../support/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../support/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/libraries-util.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/city.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="../support/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../support/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../support/vendor/bootstrap/js/popper.js"></script>
<script src="../support/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../support/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../support/vendor/daterangepicker/moment.min.js"></script>
<script src="../support/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../support/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->


</body>
</html>