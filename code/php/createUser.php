<?php
session_start();
include_once("PDO.php");
$pdo = new PDOconn();

$isOK=true;
$usernamePattern = '/^\w{1,30}/';
$namesPattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}$/u";
$mailPattern = "/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/";
$passwordPattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
//TODO créer la vérification du formulaire de création
if(!preg_match($usernamePattern, $_POST["pseudo"]))
{
    $isOK = false;
    $_SESSION["error"] .= "The username must use only letters, numbers or underscore and must be under 50 characters.\n";
}
$pdo->searchDuplicate($_POST['pseudo']);
if(!preg_match($mailPattern, $_POST["mail"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Your mail doesn't match with the mail convention (exemple.name@domain.com).\n";
}
if(!preg_match($namesPattern, $_POST["firstname"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Your firstname is too long or contains other characters than letters. (50 characters max.)\n";
}
if(!preg_match($namesPattern, $_POST["lastname"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Your lastname is too long or contains other characters than letters. (50 characters max.)\n";
}
if(!preg_match($passwordPattern, $_POST["password"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Your password doesn't match the password complexity.\n";
}
if($_POST["password"] != $_POST["confirmPassword"])
{
    $isOK = false;
    $_SESSION["error"] .= "Your password doesn't match the validation input.\n";
}
if(!is_null($pdo->result))
{
    $isOK = false;
    $_SESSION["error"] .= "This user already exists.\n";
}
if($isOK)
{
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $pseudo = $_POST["pseudo"];
    $mail = $_POST["mail"];
    $pswd = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $pdo->createUser($pseudo, $lastname, $firstname, $pswd, $mail);
    $_SESSION["isConnected"] = true;
    //TODO mettre la page du compte utilisateur
    header('Location: home.php');
}
else
{
    //TODO mettre la page du compte utilisateur
    header('Location: signIn.php');
}
?>