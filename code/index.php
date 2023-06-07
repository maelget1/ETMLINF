<?php
session_start();
$_SESSION["error"] = "";
$_SESSION["isConnected"] = false;
$_SESSION['admin'] = false;
$_SESSION['validation'] = "";
$_SESSION['userMail'] = "";
header('Location:php/home.php');
?>
