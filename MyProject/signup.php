
<!DOCTYPE html>
<?php
include 'masterpage.php';
include 'connectivity.php';

if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['employeeid'])&&isset($_POST['password'])){
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$email= $_POST['email'];
	$empid= $_POST['employeeid'];
	$password= $_POST['password'];
	if(!empty($firstname)&&!empty($lastname)&&!empty($email)&&!empty($password)&&!empty($empid)){
		$query="INSERT INTO `simple_login`.`mydb`(`firstname`,`lastname`,`email`,`password`,`emp_id`) VALUES('$firstname','$lastname','$email','$password','$empid')";
		if(!mysql_query($query))
		{
		echo mysql_error();
		}
		}
}
?>

<!-- Comment-->
<style>
	fieldset{
	font-size:15px;
	}

	form.myfont{
	font-family:Comic Sans MS;
	font-size: 15px;
	}

</style>

<script>
function myfunction(){
	document.getElementById("demo").innerHTML= "Submitted";
}

function disable_list(){
	document.getElementById("options").disable=true;
}
</script>

<center>
<form style="position:relative; left:-50px;top:120px;"action ="signup.php" autocomplete="on" class="myfont" method="POST">
<fieldset style="width:300px">
<legend > &reg; Registration Form</legend>

First name: <input type= "text" name= "firstname" placeholder ="Your first name" required><br>
Last name: <input type= "text" name ="lastname" placeholder ="Your last name" required><br>
Password:  <input type= "password" name="password" placeholder="Your password" required><br>

<input type="radio" name="sex" value="male">Male</input>
<input type="radio" name="sex" value="Female">Female</input><br>

Enter Email:<input type="email" name ="email" autocomplete="off" required></input><br>

Select your domain:
<select id= "options">
<option value="Student">Student</option>
<option value="Professional" selected>Professional</option>
</select><br>

Employee ID:<input type= "text" name= "employeeid" required><br></input>

<br>
<button id="demo" type="submit"  onmouseover= "style.color='red'" onmouseout="style.color='black'" onclick="disable_list()">Submit</button>
<input type="reset" value="Reset" onmouseover= "style.color='red'" onmouseout="style.color='black'"></input>
</fieldset>
</center>
</form>


