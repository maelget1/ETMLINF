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
        <title>Sign In Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/signIn.css">
    </head>
    <?php
        include_once("../html/header.html");
    ?>

    <main>
        <!--formulaire de création de compte-->
        <form action="createUser.php" method="post">
            <div>
                <label>Username :</label>
                <input type="text" name="pseudo" autocomplete="off" placeholder="example: J0hnD03">
            </div>
            <div>
                <label>Mail :</label>
                <input type="text" name="mail" autocomplete="off" placeholder="example: john.doe@gmail.com">
            </div>
            <div>
                <label>Firstname :</label>
                <input type="text" name="firstname" autocomplete="off" placeholder="example: John">
            </div>
            <div>
                <label>Lastname :</label>
                <input type="text" name="lastname" autocomplete="off" placeholder="example: Doe">
            </div>
            <div>
                <label>Password :</label>
                <input type="password" name="password" autocomplete="off" placeholder="min. 8 characters (1 Upper, 1 Lower, 1 digit, 1 special character)">
            </div>
            <div>
                <label>Confirm password :</label>
                <input type="password" name="confirmPassword" autocomplete="off">
            </div>
            <input type="submit" value="Create my account">
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