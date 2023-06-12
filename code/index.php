<?php
session_start();
$_SESSION["error"] = "";
$_SESSION["isConnected"] = false;
$_SESSION['admin'] = false;
$_SESSION['validation'] = "";
$_SESSION['userMail'] = "";
$_SESSION['userID'] = "";
$_SESSION['logUsername'] = "";
$_SESSION['logEmail'] = "";
$_SESSION['logFirstname'] = "";
$_SESSION['logLastname'] = "";
$_SESSION['conMessage'] = "";
header('Location:php/home.php');
?>
