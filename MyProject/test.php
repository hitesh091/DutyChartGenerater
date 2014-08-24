<?php
session_start();

if($_SESSION["userid"])
{
echo '<center> ';
echo '<br><br><strong>LOGIN SUCCESSFUL <br></strong>';
echo '<br><br><i><a href="mysql_temp1.php">Generate Duty Chart </a></i>';
echo '<br>or<br><a href="logout.php">Logout</a>';
echo '</center>';
}
else{
header("location:main.php");  
}

?>