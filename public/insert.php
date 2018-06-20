<?php

$inSite = true;
require_once('../public/boot.php');

$conn = $app -> getDatabaseAccess();

$sql = "INSERT INTO product (name, quantity, ingredients, allergens, packaging, preparation_tool, preparation_instructions, storage_info, validity, category_id, brand_id, where_sold) VALUES ('" .
    getValue($_POST, 'name') . "', '" .
    getValue($_POST, 'quantity') . "', '" .
    getValue($_POST, 'ingredients') . "', '" .
    getValue($_POST, 'allergens') . "', '" .
    getValue($_POST, 'packaging') . "', '" .
    getValue($_POST, 'preparation_tool') . "', '" .
    getValue($_POST, 'preparation_instructions') . "', '" .
    getValue($_POST, 'storage_info') . "', '" .
    getValue($_POST, 'validity') . "', '" .
    getValue($_POST, 'category_id') . "', '" .
    getValue($_POST, 'brand_id') . "', '" .
    getValue($_POST, 'where_sold') . "')";

$result = $conn -> query($sql);

if(!$result) {
    error(string_database_error);
}

$productId = $conn->insert_id;

if(isset($_GET['userId'])){
    $userId = $_GET['userId'];
} else if(isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
} else {
    $userId = -1;
}

$sql = "INSERT INTO news (userId, productId, type) VALUES ('" . $userId . "','" . $productId . "', 1)";
$conn -> query($sql);

printPositiveJson("Insert successful");

header('Location:add.php');

function getValue($obj, $tag) {
    if($obj != null && isset($obj[$tag]) && $obj[$tag] != "") {
        return $obj[$tag];
    } else {
        return "null";
    }
}