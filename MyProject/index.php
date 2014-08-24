<?php
require 'connectivity.php';
require 'check_authentication.php';

if(isset($_SESSION['user_emp_id']) && !(empty($_SESSION['user_emp_id']))){
	echo 'you \re logged in. <a href="logout.php">.Log out</a>';
}
else{
	include 'main.php'; 
}

?>