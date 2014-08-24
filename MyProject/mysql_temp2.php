<?php

$link=mysql_connect('localhost','root','hitesh') or die('could not connect');
$db=mysql_select_db('simple_login') or die('could not connect to db');
//echo 'error number: '.mysql_errno($link).'<br>-------------------------<br>';

?>