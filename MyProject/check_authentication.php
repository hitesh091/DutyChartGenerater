<?php
ob_start(); // for header
session_start();
echo $current_file= $_SERVER['SCRIPT_NAME'];

?>