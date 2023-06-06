<?php
session_start();
$_SESSION["error"] = "";
$_SESSION["isConnected"] = false;
header('Location:php/home.php');
?>
