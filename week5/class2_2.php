<?php
//set default timezone
date_default_timezone_set('Pacific/Auckland');
//take the time from system or online
//data function to take the time out from system or online
$t = date("Y-m-d"); //https://www.php.net/manual/en/function.date.php
$t1 = date("H:i:s");
echo $t." ".$t1;

$hour = intval(date("H"));
$minutes = intval(date("i"));

if ($hour>10 && $minutes < 15){ //&& means and || means or
    echo "Have good morning";
}elseif ($hour<20){
    echo "Have a good day";
}else{
    echo "Have a good night";
}
