<?php

class Core {

    function __construct() {

    }

    function databaseAccess() {
        $servername = "localhost";
        $user = "root";
        $pass = "root";
        $database = "cannf";

        $conn = new mysqli($servername, $user, $pass, $database);
        $conn -> set_charset('utf8');
        return $conn;
    }

}