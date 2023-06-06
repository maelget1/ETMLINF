<?php
session_start();
include_once("PDO.php");
$pdo = new PDOconn();
$isOK=true;
$usernamePattern = '/^\w{1,30}/';
$passwordPattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
$pswd = password_hash($_POST["password"], PASSWORD_BCRYPT);
$pdo->loginUser($_POST['pseudo'], $pswd);
if(is_null($pdo->result))
{
    $_SESSION['error'] = "Wrong username or password. Please try again.";
    header('Location:logIn.php');
}
else
{
    //TODO mettre le nom d'utilisateur dans une variable de session
    $_SESSION['isConnected'] = true;
    header('Location:home.php');
}
?>