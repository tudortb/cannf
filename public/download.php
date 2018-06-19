<?php

$inSite = true;
require_once ('boot.php');

if(!isset($_GET['url'])){
    error(string_received_data_error);
}

$url = $_GET['url'];

header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header('Content-disposition: attachment; filename="' . $url . '"');
echo readfile($url);