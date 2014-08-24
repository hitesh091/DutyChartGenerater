<?php
ob_start(); // for header
session_start();
session_destroy();
$_SESSION=array();
echo 'logout successful';
header('Location: main.php');

?>
