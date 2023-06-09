<?php
session_start();
include_once('PDO.php');
$isOK = true;
$usernamePattern = '/^\w{1,30}/';
$mailPattern = "/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/";
if(!preg_match($usernamePattern, $_POST["name"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Le nom d'utilisateur ne doit contenir que des lettres, des chiffres ou des tirets du bas. De plus, il doit faire moins de 50 caractères\n";
}
if(!preg_match($mailPattern, $_POST["email"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Votre mail ne suit pas la norme de nommage d'une adresse mail. (exemple.name@domain.com).\n";
}
if($isOK)
{
    $pdo = new PDOconn();
    $pdo->sendMessage($_POST['name'], $_POST['email'], $_POST['message']);
    $_SESSION['validation'] = "Nous avons bien reçu votre message. Nous essayerons d'y répondre au plus vite";
    header('Location:contact.php');
}
else
{
    header('Location:contact.php');
}
?>