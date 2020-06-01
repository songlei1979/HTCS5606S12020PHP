<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body onload="leftDividerAnimation()">

<?php
include_once "header.php";
?>
<div id = "content">
    <p>About US</p>
    <div id = "leftDiv">
        <img id = "leftDivPic" src="image/header.jpg">
    </div>
    <div id="rightDiv">This is my about us page</div>
</div>
<?php
include_once "footer.php";
?>

</body>
</html>
