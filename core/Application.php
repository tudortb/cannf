<?php

require_once ("Core.php");
require_once ("constants.php");
require_once("../support/base-IO.php");
require_once("../support/data-manipulation.php");

class Application {

    private $Core;

    function __construct() {
        $this->Core = new Core();
    }

    function getDatabaseAccess() {
        if($this->Core == NULL) {
            error(string_database_error);
        }
        $connection = $this->Core->databaseAccess();
        if($connection == NULL) {
            error(string_database_error);
        }
        return $connection;
    }

}