<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <?php
        include_once("../php/header.php");
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de contact</title>
        <link rel="stylesheet" href="../css/contact.css">
    </head>

    <main>
        <h2>Contactez nous</h2>
        <form>
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </main>

    <?php
        include_once("../html/footer.html");
    ?>

</html>