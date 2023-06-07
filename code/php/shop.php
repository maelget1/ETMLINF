<?php
session_start();
include_once('PDO.php');
$pdo = new PDOconn();
$products = $pdo->selectAllProducts();
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
            <?php
            foreach($products as $product)
            {
                $image = imagecreatefromstring($product['pro_image']);
                ob_start();
                imagejpeg($image, null, 80);
                $data = ob_get_contents();
                ob_end_clean();
            ?>
            <div class="product">
                <?php
                echo '<img src="data:image/jpg;base64,'.base64_encode($data).'"alt='.$product['pro_name'].'>';
                ?>
                <h3><?=$product['pro_name']?></h3>
                <p><?=$product['pro_description']?></p>
                <p>Prix: CHF <?=$product['pro_price']?></p>
                <button>Ajouter au panier</button>
            </div>
            <?php
            }
            ?>
        </div>
    </main>

    <?php
        include_once("../html/footer.html");
    ?>

</html>