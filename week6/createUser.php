<?php
include_once "class/User.php";

$newUser = new User('username', 'password', 'name');
$newUser->save();
