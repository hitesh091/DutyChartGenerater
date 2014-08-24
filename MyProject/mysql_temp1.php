<?php
// print table
require 'mysql_temp2.php';
$sql = "SELECT * FROM `simple_login`.`chauffers` ";
$result=mysql_query($sql) or die(mysql_error());

echo "<table border='1' cellspacing='1' cellpadding ='3' >";
echo "<tr><th> id </th><th> Name </th><th> shift</th></tr>";
while($row=mysql_fetch_assoc($result)){

echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['name'];
echo "</td><td>";
echo $row['shift'];
echo "</td></tr>";
}
echo "</table>";

?>
<div style="position:absolute;top: 10px;left:1150px;font-size:23px;color:blue;">
<a href="main.php">Click here to Logout</a>
</div>