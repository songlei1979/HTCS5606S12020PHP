<?php
$server = "dno6xji1n8fm828n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "frn8ql19w9jrd0hy";
$pwd = "uvsw3rnopxb2uxq2";
$database = "eq8apmg97080j54s";

$connection = new mysqli($server, $user, $pwd, $database); //create database connection
if ($connection->connect_error){
    echo $connection->connect_error;
}else{
    echo "Connection Created";
}
