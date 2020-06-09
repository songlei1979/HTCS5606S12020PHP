<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="js/script.js">    </script>
</head>
<body onload="leftDividerAnimation()">
<?php
include_once "header.php";
?>
<div id = "content">
    <p>Home Page</p>
    <div id = "leftDiv">
        <img id = "leftDivPic" src="image/header.jpg">
    </div>
    <div id="rightDiv">My home page ..</div>
</div>
<?php
include_once "footer.php";
?>
</body>
</html>
