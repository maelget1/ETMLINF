<?php
session_start();
include_once('PDO.php');
$pdo = new PDOconn();
$pdo->removeFromCart($_GET['id']);
header('Location: '.$_SERVER['HTTP_REFERER']);
?>