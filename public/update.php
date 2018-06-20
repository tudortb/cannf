<?php

$inSite = true;
require_once('../public/boot.php');

$conn = $app -> getDatabaseAccess();

if(!isset($_POST['productId'])) {
    error(string_received_data_error);
}

$productId = $_POST['productId'];

$sql = "UPDATE product SET " .
    "name = '" . getValue($_POST, 'name') . "', " .
    "quantity = '" . getValue($_POST, 'quantity') . "', " .
    "ingredients = '" . getValue($_POST, 'ingredients') . "', " .
    "allergens = '" . getValue($_POST, 'allergens') . "', " .
    "packaging = '" . getValue($_POST, 'packaging') . "', " .
    "preparation_tool = '" . getValue($_POST, 'preparation_tool') . "', " .
    "preparation_instructions = '" . getValue($_POST, 'preparation_instructions') . "', " .
    "storage_info = '" . getValue($_POST, 'storage_info') . "', " .
    "validity = '" . getValue($_POST, 'validity') . "', " .
    "category_id = '" . getValue($_POST, 'category_id') . "', " .
    "brand_id = '" . getValue($_POST, 'brand_id') . "', " .
    "where_sold = '" . getValue($_POST, 'where_sold') . "' ".
    "WHERE id = '" . $productId . "'";

$result = $conn -> query($sql);

if(!$result) {
    error(string_database_error);
}

if(isset($_GET['userId'])){
    $userId = $_GET['userId'];
} else if(isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
} else {
    $userId = -1;
}

$sql = "INSERT INTO news (userId, productId, type) VALUES ('" . $userId . "','" . $productId . "', 3)";
$conn -> query($sql);

printPositiveJson("Insert successful");

header('Location:characteristics.php?productId=' . $productId . '');

function getValue($obj, $tag) {
    if($obj != null && isset($obj[$tag]) && $obj[$tag] != "") {
        return $obj[$tag];
    } else {
        return "null";
    }
}