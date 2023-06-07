<?php
session_start();
$_SESSION["error"] = "";
$_SESSION["isConnected"] = false;
$_SESSION['admin'] = false;
header('Location:php/home.php');
?>
