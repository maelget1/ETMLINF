<?php
class PDOconn{
    function __construct()
    {
        // Se connecter via PDO
        try
        {
            $connector = new PDO('mysql:host=localhost;dbname=etmlinf;charset=utf8' , 'root', 'root');
        }
        catch (PDOException $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
    }

    //TODO créer la requête de création de l'utilisateur
    function createUser($username, $name, $firstname, $password, $mail)
    {

    }
}

?>