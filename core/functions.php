<?php

function printUserId() {
    if($_SESSION != null && isset($_SESSION['userId'])) {
        print ($_SESSION['userId']);
    } else {
        print ("-1");
    }
}

function printLogInOutButton () {
    if($_SESSION != null && isset($_SESSION['userId'])) {
        print ("<a href='logout.php'>Log Out</a>");
    } else {
        print ("<a href='login.php'>Log In</a>");
    }
}