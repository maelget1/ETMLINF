<?php
// Se connecter via PDO
try
{
    $connector = new PDO('mysql:host=localhost;dbname=etmlinf;charset=utf8' , 'root', 'root');
}
catch (PDOException $e)
{
   die('Erreur : ' . $e->getMessage());
}
?>