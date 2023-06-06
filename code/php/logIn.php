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
        <form action="loginUser.php" method="post">
            <div>
                <label>Username :</label>
                <input type="text" name="pseudo">
            </div>
            <div>
                <label>Password :</label>
                <input type="text" name="password">
            </div>
            <input type="submit" value="Login">
        </form>
    </main>

    <?php
    include_once("../html/footer.html");
    ?>

</html>