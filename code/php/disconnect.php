<?php
session_start();
$_SESSION['isConnected'] = false;
header('Location: '.$_SERVER['HTTP_REFERER']);
?>