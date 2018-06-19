<?php

function printUserId() {
    if($_SESSION != null && isset($_SESSION['userId'])) {
        print ($_SESSION['userId']);
    } else {
        print ("-1");
    }
}

function printMenuButtons () {
    if($_SESSION != null && isset($_SESSION['userId'])) {
        print ("<a href='logout.php'>Log Out</a>");
    } else {
        print ("<a href='login.php'>Log In</a>");
    }
}

function printProductButtons () {
    if($_SESSION != null && isset($_SESSION['userId'])) {
        print ('<p>');
        print ('<a id="export-csv-button" class="export">Export CSV</a>');
        print ('<a id="export-xml-button" class="export">Export XML</a>');
        if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
            print ('<a id="modify-button" class="export">Modify</a>');
            print ('<a id="delete-button" class="export">Delete</a>');
        }
        print ('</p>');
    }
}

function printProductsButtons () {
    if($_SESSION != null && isset($_SESSION['userId'])) {
        print ('<p>');
        print ('<a href="add.php" class="import">Add a product</a>');
        print ('<a id="export-csv-button" class="import">Export CSV</a>');
        print ('<a id="export-xml-button" class="import">Export XML</a>');
        print ('</p>');
    }
}