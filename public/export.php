<?php

$inSite = true;
require_once ("boot.php");

if(!isset($_GET['productId'])){
    error(string_received_data_error);
}

if(!isset($_GET['type'])){
    error(string_received_data_error);
}

$productId = $_GET['productId'];
$type = $_GET['type'];

$conn = $app -> getDatabaseAccess();

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

if($type == 'csv') {
    $file = fopen("exports/product-" . $productId . ".csv", "w");
    $text = "Name,Quantity,Ingredients,Allergens,Packaging,Preparation Tool,Preparation Instructions,Storage Information,Validity,Category,Brand,Where Sold\n";
    fwrite($file, $text);

    $text = secureCSV($product['name']) . "," .
        secureCSV($product['quantity']) . "," .
        secureCSV($product['ingredients']) . "," .
        secureCSV($product['allergens']) . "," .
        secureCSV($product['packaging']) . "," .
        secureCSV($product['preparation_tool']) . ',' .
        secureCSV($product['preparation_instructions']) . "," .
        secureCSV($product['storage_info']) . "," .
        secureCSV($product['validity']) . "," .
        secureCSV($product['category']) . "," .
        secureCSV($product['brand']) . "," .
        secureCSV($product['where_sold']) . "\n";
    fwrite($file, $text);

    printPositiveJson("CSV export successful");
} else if($type == 'xml') {
    $file = fopen("exports/product-" . $productId . ".xml", "w");
    $text = '<?xml version="1.0" encoding="UTF-8"?>';
    fwrite($file, $text);

    $text = "\n<product>\n";

    $text .= "<name>" . secureXML($product['name']) . "</name>\n";
    $text .= "<quantity>" . secureXML($product['quantity']) . "</quantity>\n";
    $text .= "<ingredients>" . secureXML($product['ingredients']) . "</ingredients>\n";
    $text .= "<allergens>" . secureXML($product['allergens']) . "</allergens>\n";
    $text .= "<packaging>" . secureXML($product['packaging']) . "</packaging>\n";
    $text .= "<preparation_tool>" . secureXML($product['preparation_tool']) . "</preparation_tool>\n";
    $text .= "<preparation_instructions>" . secureXML($product['preparation_instructions']) . "</preparation_instructions>\n";
    $text .= "<storage_info>" . secureXML($product['storage_info']) . "</storage_info>\n";
    $text .= "<validity>" . secureXML($product['validity']) . "</validity>\n";
    $text .= "<category>" . secureXML($product['category']) . "</category>\n";
    $text .= "<brand>" . secureXML($product['brand']) . "</brand>\n";
    $text .= "<where_sold>" . secureXML($product['where_sold']) . "</where_sold>\n";

    $text .= "</product>\n";

    fwrite($file, $text);

    printPositiveJson("XML export successful");
} else if($type == 'csv-all') {
    $file = fopen("exports/products.csv", "w");
    $text = "Name,Quantity,Ingredients,Allergens,Packaging,Preparation Tool,Preparation Instructions,Storage Information,Validity,Category,Brand,Where Sold\n";
    fwrite($file, $text);

    $sql = "SELECT * FROM product WHERE 1 = 1";
    $result = $conn -> query($sql);
    $products = convertSQLResult($result);

    foreach($products as $product) {
        $sql = "SELECT * FROM category WHERE id = " . $product['category_id'] . " ";
        $result = $conn -> query($sql);
        $category = convertSQLResult($result)[0];
        $product['category'] = $category['name'];

        $sql = "SELECT * FROM brand WHERE id = " . $product['brand_id'] . " ";
        $result = $conn -> query($sql);
        $brand = convertSQLResult($result)[0];
        $product['brand'] = $brand['name'];

        $text = secureCSV($product['name']) . "," .
            secureCSV($product['quantity']) . "," .
            secureCSV($product['ingredients']) . "," .
            secureCSV($product['allergens']) . "," .
            secureCSV($product['packaging']) . "," .
            secureCSV($product['preparation_tool']) . ',' .
            secureCSV($product['preparation_instructions']) . "," .
            secureCSV($product['storage_info']) . "," .
            secureCSV($product['validity']) . "," .
            secureCSV($product['category']) . "," .
            secureCSV($product['brand']) . "," .
            secureCSV($product['where_sold']) . "\n";
        fwrite($file, $text);
    }
    printPositiveJson("CSV export successful");
} else if($type == 'xml-all') {
    $file = fopen("exports/products.xml", "w");
    $text = '<?xml version="1.0" encoding="UTF-8"?>';
    fwrite($file, $text);

    $sql = "SELECT * FROM product WHERE 1 = 1";
    $result = $conn -> query($sql);
    $products = convertSQLResult($result);

    foreach($products as $product) {
        $sql = "SELECT * FROM category WHERE id = " . $product['category_id'] . " ";
        $result = $conn -> query($sql);
        $category = convertSQLResult($result)[0];
        $product['category'] = $category['name'];

        $sql = "SELECT * FROM brand WHERE id = " . $product['brand_id'] . " ";
        $result = $conn -> query($sql);
        $brand = convertSQLResult($result)[0];
        $product['brand'] = $brand['name'];

        $text = "\n<product>\n";

        $text .= "<name>" . secureXML($product['name']) . "</name>\n";
        $text .= "<quantity>" . secureXML($product['quantity']) . "</quantity>\n";
        $text .= "<ingredients>" . secureXML($product['ingredients']) . "</ingredients>\n";
        $text .= "<allergens>" . secureXML($product['allergens']) . "</allergens>\n";
        $text .= "<packaging>" . secureXML($product['packaging']) . "</packaging>\n";
        $text .= "<preparation_tool>" . secureXML($product['preparation_tool']) . "</preparation_tool>\n";
        $text .= "<preparation_instructions>" . secureXML($product['preparation_instructions']) . "</preparation_instructions>\n";
        $text .= "<storage_info>" . secureXML($product['storage_info']) . "</storage_info>\n";
        $text .= "<validity>" . secureXML($product['validity']) . "</validity>\n";
        $text .= "<category>" . secureXML($product['category']) . "</category>\n";
        $text .= "<brand>" . secureXML($product['brand']) . "</brand>\n";
        $text .= "<where_sold>" . secureXML($product['where_sold']) . "</where_sold>\n";

        $text .= "</product>\n\n";

        fwrite($file, $text);
    }
    printPositiveJson("XML export successful");
}

function secureCSV($old) {
    $new = str_replace(",", "", $old);
    return $new;
}

function secureXML($old) {
    return $old;
}
