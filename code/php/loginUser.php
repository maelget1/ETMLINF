<?php
session_start();
include_once("PDO.php");
$pdo = new PDOconn();
$isOK=true;
$usernamePattern = '/^\w{1,30}/';
$passwordPattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
$user = $pdo->loginUser($_POST['pseudo']);
var_dump($user);
$pswd = password_verify($_POST['password'], $user[0]['acc_password']);
if(empty($user) || !$pswd)
{
    $_SESSION['error'] = "Wrong username or password. Please try again.";
    header('Location:logIn.php');
}
else
{
    $_SESSION['isConnected'] = true;
    $_SESSION['connectedUser'] = $_POST['pseudo'];
    $_SESSION['userMail'] = $user[0]['acc_mail'];
    if($user[0]['acc_isAdmin'] == 1)
    {
        $_SESSION['admin'] = true;
    }
    header('Location:home.php');
}
?>