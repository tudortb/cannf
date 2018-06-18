<?php

function convertSQLResult($result) {
    $data = [];
    if($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

function currentPage($page, $current) {
    if(strpos($current, $page) !== false) {
        return true;
    } else {
        return false;
    }
}