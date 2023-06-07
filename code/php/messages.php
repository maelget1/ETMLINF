<?php
session_start();
include_once('PDO.php');
$pdo = new PDOconn();
$messages = $pdo->selectAllMessages();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Messages</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/shop.css">
    </head>
    <?php
        include_once("../php/header.php");
    ?>
    <main>
        <h2>Messages</h2>
        <div class="containerProducts">
            <?php
            foreach($messages as $message)
            {
            ?>
            <div class="product">
                <h3><?=$message['mes_name']?></h3>
                <p><?=$message['mes_message']?></p>
                <a href="mailto: <?=$message['mes_mail']?>">contacter en retour : <?=$message['mes_mail']?></a>
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