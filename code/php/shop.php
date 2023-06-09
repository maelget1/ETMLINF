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
        <title>Boutique ETML</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/shop.css">
    </head>
    <?php
        include_once("../php/header.php");
    ?>
    <main>
        <h2>Boutique</h2>
        <?php
            if(!$_SESSION['isConnected'])
            {
        ?>
        <p>Veuilez vous connecter ou créer un compte pour acheter des produits</p>
        <?php
            }
        ?>
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
                <?php
                    if($_SESSION['isConnected'])
                    {
                ?>
                <form action="addToCart.php" method="POST">
                    <input name="productID" type="hidden" value="<?=$product['pro_id']?>">
                    <button type="submit">Ajouter au panier</button>           
                </form>
                <?php
                    }                
                ?>
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