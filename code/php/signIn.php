<?php
session_start();
//if(isset($_SESSION["error"]))
//{
    $_SESSION["error"];
//}
//if(isset($_SESSION["isConnected"])){
    $_SESSION["isConnected"];
//}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Page d'enregistrement</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/signIn.css">
    </head>
    <?php
        include_once("../php/header.php");
    ?>

    <main>
        <!--formulaire de création de compte-->
        <form action="createUser.php" method="post">
            <div>
                <label>Nom d'utilisateur:</label>
                <input type="text" name="pseudo" autocomplete="off" placeholder="exemple: J0hnD03">
            </div>
            <div>
                <label>Email:</label>
                <input type="text" name="mail" autocomplete="off" placeholder="exemple: john.doe@gmail.com">
            </div>
            <div>
                <label>Prénom:</label>
                <input type="text" name="firstname" autocomplete="off" placeholder="exemple: John">
            </div>
            <div>
                <label>Nom:</label>
                <input type="text" name="lastname" autocomplete="off" placeholder="exemple: Doe">
            </div>
            <div>
                <label>Mot de passe:</label>
                <input type="password" name="password" autocomplete="off" placeholder="min. 8 caractères (1 Majuscule, 1 minuscule, 1 chiffre, 1 caractères spécial)">
            </div>
            <div>
                <label>Confirmez le mot de passe:</label>
                <input type="password" name="confirmPassword" autocomplete="off">
            </div>
            <input type="submit" value="Créer mon compte">
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