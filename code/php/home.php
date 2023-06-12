<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Page d'accueil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/home.css">
    </head>
    <?php
        include_once("../php/header.php");
    ?>

    <main>
        <h2>Bienvenue sur notre site !</h2>
        <p>Découvrez l'essence de l'ETML à Lausanne ! Représentez notre identité visuelle avec style et fierté grâce à nos produits dérivés uniques. Montrez au monde que vous faites partie de cette communauté dynamique, innovante et unie. Explorez notre sélection dès maintenant et rejoignez le mouvement ETML !</p>
    </main>

    <?php
    include_once("../html/footer.html");
    ?>

</html>