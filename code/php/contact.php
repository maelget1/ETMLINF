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
        <form action="contactUs.php" method="POST">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required  autocomplete="off" <?php if($_SESSION['isConnected']){?>value="<?=$_SESSION['connectedUser']?>"<?php }?>>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required  autocomplete="off" <?php if($_SESSION['isConnected']){?>value="<?=$_SESSION['userMail']?>"<?php }?>>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required  autocomplete="off"></textarea>

            <button type="submit">Envoyer</button>
        </form>
        <?php
            if($_SESSION['validation'] == "")
            {
                echo "<p>".$_SESSION['error']."</p>";
                $_SESSION['error'] = "";
            }
            else
            {
                echo "<p>".$_SESSION['validation']."</p>";
                $_SESSION['validation'] = "";
            }
        ?>
    </main>

    <?php
        include_once("../html/footer.html");
    ?>

</html>