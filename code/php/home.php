<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/home.css">
    </head>
    <?php
        include_once("../php/header.php");
    ?>

    <main>
        <h2>Welcome to Your Page !</h2>
        <p>This is the main con tent of your page.</p>
    </main>

    <?php
    include_once("../html/footer.html");
    ?>

</html>