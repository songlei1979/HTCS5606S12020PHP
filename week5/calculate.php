<?php
if (isset($_POST["width"])){ //isset checks the post data
    $w = $_POST["width"];
    $h = $_POST["height"];
    $area = $w * $h;
    echo "Area: ".$area;
}else{
    echo "go back to form page";
}
