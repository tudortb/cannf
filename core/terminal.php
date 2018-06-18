<?php

$inSite = false;
require_once('../application/boot.php');

if(!isset($_GET['step'])) {
    error(string_received_data_error);
}

if(!isset($_GET['userId'])) {
    error(string_received_data_error);
}

$step = $_GET['step'];
$userId = $_GET['userId'];

$conn = $app -> getDatabaseAccess();

switch ($step) {
    case k_step_products:
        break;
    case k_step_brands:
        break;
}