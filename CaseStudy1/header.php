<div id = "header">
    <div id="headerPicture">
        <img src="image/header.jpg">
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
<!--            <li><a href="food.html" >Food</a></li>-->
<!--            <li><a href="phone.html">Phone</a></li>-->
            <?php
            include_once "class/User.php";
            $user = new User(null, "", "", "");
            $categories = $user->viewCategories();
            $i = 0;
            while ($i < sizeof($categories)){
                $category = $categories[$i];
                echo "<li><a>".$category->name."</a></li>";
                $i = $i + 1;
            }
            ?>
            <li><a href="aboutus.php">About US</a></li>
            <li><a href="https://www.unitec.ac.nz/">Unitec</a></li>
        </ul>

    </div>
    <div id ="topAnimation">
        XXX Supermarket
    </div>
</div>
