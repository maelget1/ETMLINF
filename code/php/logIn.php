<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign In Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/signIn.css">
    </head>
    <?php
        include_once("../php/header.php");
    ?>

    <main>
        <!--formulaire de création de compte-->
        <form action="loginUser.php" method="post">
            <div>
                <label>Nom d'utilisateur:</label>
                <input type="text" name="pseudo" autocomplete="off">
            </div>
            <div>
                <label>Mot de passe:</label>
                <input type="password" name="password" autocomplete="off">
            </div>
            <input type="submit" value="Se connecter">
        </form>
        <?php
            if(!$_SESSION["isConnected"])
            {
                echo "<p>".$_SESSION['error']."</p>";
                $_SESSION['error'] = "";
            }
        ?>
    </main>

    <?php
    include_once("../html/footer.html");
    ?>

</html>