<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shweta Assessment 1 Home page</title>

    <script src="JS/script.js"></script>
    <link rel="stylesheet" href="CSS/checkout.css">
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body id="page6">


<div id="header">
    <div class="topnav">
        <img src="image/checkout.png" height="50" width="50"/>
        <input type="text" placeholder="Search..">
    </div>

    <h3><img src="image/logo.png" height="50" width="50"/><br>
        The Pet Meal
    </h3>
    <?php
    include_once "header.php";
    ?>
    <tr>
    <td id="middlecontent">

        <div class="product">
            <img src="image/fishfood1.jpeg" />

            <p>$9.99 ea</p>
            <p>
                Qty:<input class="qty" id="fishfood1Qty" type="number">
                <button class = "addBut" id="addfishfood1" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>
        <div class="product">
            <img src="image/fishfood.jpeg"/>

            <p>$11.99 ea</p>
            <p>Qty:<input class="qty" id="fishfoodQty" type="number">
                <button class = "addBut" id="addfishfood" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>
        <div class="product">
            <img src="image/petfd.jpg" />

            <p>$19.99 ea</p>
            <p>Qty:<input class="qty" id="petfdQty" type="number">
                <button class = "addBut" id="addpetfd" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>

        <div class="product">
            <img src="image/chickfood.jpeg"/>


            <p>$19.99 ea</p>
            <p>Qty:<input class="qty" id="chickfoodQty" type="number">
                <button class = "addBut" id="addchickfood" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>

        <div class="product">
            <img src="image/chickfd1.jpeg" height="510" width="510"/>


            <p>$19.99 ea</p>
            <p>Qty:<input class="qty" id="chickfd1Qty" type="number">
                <button class = "addBut" id="addchickfd1" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>
        <div class="product">
            <img src="image/henfd.png"/>


            <p>$44.99 ea</p>
            <p>Qty:<input class="qty" id="henfdQty" type="number">
                <button class = "addBut" id="addhenfd" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>

        <div class="product">
            <img src="image/parrotfd.jpeg"/>
            <p>$19.99 ea</p>
            <p>Qty:<input class="qty" id="parrotfdQty" type="number">
                <button class = "addBut" id="addparrotfd" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>

        <div class="product">
            <img src="image/henfd1.jpeg" />
            <p>$10.99 ea</p>
            <p>Qty:<input class="qty" id="henfood1Qty" type="number">
                <button class = "addBut" id="henfood1" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>
        <div class="product">
            <img src="image/birdfd.png"/>
            <p>$14.99 ea</p>
            <p>Qty:<input class="qty" id="birdfdQty" type="number">
                <button class = "addBut" id="addbirdfd" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>
        <div class="product">
            <img src="image/birdfd1.jpeg"/>
            <p>$9.99 ea</p>
            <p>Qty:<input class="qty" id="birdfd1Qty" type="number">
                <button class = "addBut" id="addbirdfd1" onclick="addToCart(this)">Add to Cart</button>
            </p>
        </div>

    </td>

    <td id="rightside">
        <p>Cart:</p>
        <div id="cartDiv"></div>
        <button id="showInvoiceBut">Invoice</button>
    </td>
    </tr>
    </table>
</div>

<div id="voicePage" class="voice">

    <!-- Modal content -->
    <div id="voice-content">
        <span class="close">&times;</span>
        <p>Please check your invoice</p>
    </div>
</div>
<!--Footer-->
<?php
include_once "footer.php";
?>
</body>
</html>