<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Shop Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/shop.css">
    </head>
    <?php
        include_once("../php/header.php");
    ?>
    <main>
        <h2>Shop</h2>
        <div class="containerProducts">
            <div class="product">
                <img src="../images/axe.png" alt="Product 1">
                <h3>Product 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="../images/axe.png" alt="Product 2">
                <h3>Product 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $29.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="../images/axe.png" alt="Product 2">
                <h3>Product 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $29.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="../images/axe.png" alt="Product 2">
                <h3>Product 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $29.99</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </main>

    <?php
        include_once("../html/footer.html");
    ?>

</html>