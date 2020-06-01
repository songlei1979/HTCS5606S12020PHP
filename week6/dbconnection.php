<?php
$server = "dno6xji1n8fm828n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "frn8ql19w9jrd0hy";
$pwd = "uvsw3rnopxb2uxq2";
$database = "eq8apmg97080j54s";

function dbconn(){
    $connection = new mysqli($GLOBALS['server'], $GLOBALS['user'], $GLOBALS['pwd'], $GLOBALS['database']); //create database connection
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        return $connection;
    }
}

function login($username, $password){
//    return true/false return give result back and jump out from this function. Any code after return won't be run
    $conn = dbconn();
}
