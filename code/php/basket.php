<?php
session_start();
include_once("PDO.php");
$pdo = new PDOconn();
$products = $pdo->listBasketProducts($_SESSION['userID']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Votre panier</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/shop.css">
    </head>
    <?php
        include_once("../php/header.php");
    ?>
    <main>
        <h2>Panier</h2>
        <?php
            foreach($products as $product)
            {
        ?>
            <h3><?=$product['pro_name']?> | CHF <?=$product['pro_price']?></h3>
            <button onclick="confirmFunction()">supprimer le produit</button>
        <?php
            }
        ?>
    </main>
    <script>
        function confirmFunction()
        {
            let text = "Voulez vous vraiment supprimer cet atricle ?";
            if (confirm(text) == true) {
                location.assign('removeFromCart.php?id=<?=$product["bas_id"]?>');
            }
        }
    </script>

    <?php
        include_once("../html/footer.html");
    ?>

</html>