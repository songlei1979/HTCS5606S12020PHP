<?php
include_once "dbconnection.php";

session_start();  //either you use session or set session, you must have session start
$username = $_SESSION["username"]; //use session


?>
<p><a href="logout.php">Logout</a></p>

