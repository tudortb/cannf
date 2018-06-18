<?php

$inSite = true;

require_once("boot.php");

if($_SESSION != NULL && isset($_SESSION['userId'])) {
    session_destroy();
}

header("Location:index.php");