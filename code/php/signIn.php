<?php
session_start();
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
        <!--
        <form action="editProfilePicture.php" method="post" enctype="multipart/form-data" id="form">
            <div>
                <img class="profilePicture" src="../images/noProfile.png" alt="default profile picture">
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
            </div>
        </form>
        -->
        <!--formulaire de création de compte-->
        <form action="createUser.php" method="post" enctype="multipart/form-data">
            
            <div>
                <label>Nom d'utilisateur:</label>
                <input type="text" name="pseudo" autocomplete="off" placeholder="exemple: J0hnD03" value="<?=$_SESSION['logUsername']?>">
            </div>
            <div>
                <label>Email:</label>
                <input type="text" name="mail" autocomplete="off" placeholder="exemple: john.doe@gmail.com" value="<?=$_SESSION['logEmail']?>">
            </div>
            <div>
                <label>Prénom:</label>
                <input type="text" name="firstname" autocomplete="off" placeholder="exemple: John" value="<?=$_SESSION['logFirstname']?>">
            </div>
            <div>
                <label>Nom:</label>
                <input type="text" name="lastname" autocomplete="off" placeholder="exemple: Doe" value="<?=$_SESSION['logLastname']?>">
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
        <script type="text/javascript">
            document.getElementById("image").onchange = function(){
                document.getElementById('form').submit();
            }
        </script>
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