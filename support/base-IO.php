<?php

require_once('strings.php');

const RESPONSE_POSITIVE = 'positive';
const RESPONSE_NEGATIVE = 'negative';
const RESPONSE_ERROR = 'error';
const RESPONSE_MESSAGE = 'message';

function breakProgram ($tag, $message) {
    $result = array('tag' => $tag, 'message' => $message);
    exit(json_encode($result));
}

function error ($message) {
    breakProgram(RESPONSE_ERROR, $message);
}

function message ($message) {
    $result = array('tag' => RESPONSE_MESSAGE, 'message' => $message);
    print (json_encode($result));
}

function printPositiveJson ($object) {
    $result = array('tag' => RESPONSE_POSITIVE, 'message' => $object);
    print (json_encode($result));
}

function printNegativeJson ($object) {
    $result = array('tag' => RESPONSE_NEGATIVE, 'message' => $object);
    print (json_encode($result));
}