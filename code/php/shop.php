<!DOCTYPE html>
<html lang="en">
    <?php
        include_once("../html/header.html");
    ?>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop Page</title>
        <link rel="stylesheet" href="../css/shop.css">
    </head>

    <main>
        <h2>Shop</h2>
        <div class="product">
            <img src="product1.jpg" alt="Product 1">
            <h3>Product 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Price: $19.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product2.jpg" alt="Product 2">
            <h3>Product 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Price: $29.99</p>
            <button>Add to Cart</button>
        </div>
        <!-- Add more products here -->

    </main>

    <?php
        include_once("../html/footer.html");
    ?>

</html>