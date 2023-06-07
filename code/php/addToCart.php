<?php
session_start();
include_once("PDO.php");
$pdo = new PDOconn();
$pdo->addProduct($_SESSION['userID'], $_POST['productID']);
header('Location:shop.php');
?>