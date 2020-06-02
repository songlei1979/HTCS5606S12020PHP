<?php
include_once "dbconnection.php";
$records = showRecords();
//print_r($records);

$i = 0;
while ($i < sizeof($records)){
    print_r($records[$i]);
    $i = $i + 1;
}

