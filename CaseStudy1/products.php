<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body onload="leftDividerAnimation()">

<?php
include_once "header.php";
?>

<div id = "content">
    <p>Food Page</p>
    <div id = "leftDiv">
        <img id = "leftDivPic" src="image/header.jpg">
    </div>
    <div id = "middle">
        <?php
            $categoryID = $_GET["categoryID"];
            $products = $user->showProductsByCategory($categoryID);
            $i = 0;
            while ($i<sizeof($products)){
                $product = $products[$i];
        ?>
                <div class="product">
                    <p><img src="image/<?php echo $product->image;?>"></p>
                    <p>Price: <?php echo $product->price;?></p>
                    <p>
                        <input placeholder="qty" type="number" id = "breadQty">
                        <button id = "<?php echo $product->name; ?>>" onclick="addProductToCart(this.id)">Add to cart</button>
                    </p>
                </div>
        <?php
                $i = $i + 1;
            }
        ?>



    </div>
    <div id="rightDiv">
        <h2>Cart</h2>
        <button id ="checkOut" onclick="invoice()">Check out</button>
    </div>
</div>

<!-- The Invoice -->
<div id="myModal" class="modal">

    <!-- Invoice content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id = "invoicePlace">Invoice</div>
    </div>

</div>

<?php
include_once "footer.php";
?>
</body>
</html>
