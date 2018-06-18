<?php

require_once ("../core/Application.php");

session_start();

$app = new Application();

$currentRequestURI = $_SERVER['REQUEST_URI'];
/*
if(!currentPage("login.php", $currentRequestURI) && !isset($_SESSION['userId']) && $inSite) {
    header("Location:login.php");
}*/