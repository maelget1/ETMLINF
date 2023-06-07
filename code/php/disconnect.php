<?php
session_start();
$_SESSION['isConnected'] = false;
$_SESSION['admin'] = false;
header('Location: '.$_SERVER['HTTP_REFERER']);
?>