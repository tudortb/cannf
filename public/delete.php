<?php

$inSite = false;
require_once('../public/boot.php');

if(!isset($_GET['productId'])){
    error(string_received_data_error);
}

if(!isset($_GET['userId'])){
    error(string_received_data_error);
}

$conn = $app -> getDatabaseAccess();

$userId = $_GET['userId'];
$productId = $_GET['productId'];

if(!isAdmin($conn, $userId)) {
    error(string_received_data_error);
}

$sql = "DELETE FROM product WHERE id = " . $productId . " LIMIT 1";
$result = $conn -> query($sql);

function isAdmin($conn, $userId) {
    $sql = "SELECT * FROM user WHERE id = " . $userId . " ";
    $result = $conn -> query($sql);
    $user = convertSQLResult($result);

    if(count($user) > 0) {
        $user = $user[0];
        if(isset($user['isAdmin']) && $user['isAdmin'] > 0) {
            return true;
        }
    }
    return false;
}