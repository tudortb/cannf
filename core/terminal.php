<?php

$inSite = false;
require_once('../public/boot.php');

if(!isset($_GET['step'])) {
    error(string_received_data_error);
}

if(!isset($_GET['userId'])) {
    error(string_received_data_error);
}

$step = $_GET['step'];
$userId = $_GET['userId'];

$public = isPublic($step);

$conn = $app -> getDatabaseAccess();

if(!isValid($conn, $userId) && !$public) {
    error(string_received_data_error);
}

switch ($step) {
    case k_step_products:
        getStepProducts($conn);
        break;
    case k_step_product:
        if(isset($_GET['productId'])) {
            getStepProduct($conn, $_GET['productId']);
        }
        break;
    case k_step_news:
        getStepNews($conn);
        break;
}

function isValid($conn, $userId) {

    /**
     * This measure is still very basic.
     * TODO : increase security here
     */

    $sql = "SELECT * FROM user WHERE id = '" . $userId . "' LIMIT 1";
    $result = $conn -> query($sql);
    $user = convertSQLResult($result);
    if(count($user) > 0) {
        return true;
    } else {
        return false;
    }

}

function isPublic($step) {
    switch ($step) {
        case k_step_products:
            return true;
        case k_step_product:
            return true;
        case k_step_news:
            return true;
    }
}

function getStepProducts($conn) {

    $sql = "SELECT * FROM product WHERE 1 = 1";
    $result = $conn -> query($sql);
    $products = convertSQLResult($result);
    printPositiveJson(array('products' => $products));

}

function getStepProduct($conn, $productId) {

    $sql = "SELECT * FROM product WHERE id = " . $productId . " ";
    $result = $conn -> query($sql);
    $product = convertSQLResult($result)[0];

    $sql = "SELECT * FROM category WHERE id = " . $product['category_id'] . " ";
    $result = $conn -> query($sql);
    $category = convertSQLResult($result)[0];
    $product['category'] = $category['name'];

    $sql = "SELECT * FROM brand WHERE id = " . $product['brand_id'] . " ";
    $result = $conn -> query($sql);
    $brand = convertSQLResult($result)[0];
    $product['brand'] = $brand['name'];

    printPositiveJson(array('product' => $product));

}

function getStepNews($conn) {

    $sql = "SELECT * FROM news WHERE 1 = 1 ORDER BY id DESC";
    $result = $conn -> query($sql);
    $news = convertSQLResult($result);

    foreach ($news as &$unit) {
        $sql = "SELECT * FROM user WHERE id = '" . $unit['userId'] . "'";
        $result = $conn -> query($sql);
        $user = convertSQLResult($result)[0];
        $unit['username'] = $user['username'];
        $unit['isAdmin'] = $user['isAdmin'];

        if($unit['type'] == k_news_type_insert) {
            $sql = "SELECT * FROM product WHERE id = '" . $unit['productId'] . "'";
            $result = $conn->query($sql);
            $product = convertSQLResult($result)[0];
            $unit['product'] = $product['name'];
        }
    }

    printPositiveJson(array('news' => $news));

}