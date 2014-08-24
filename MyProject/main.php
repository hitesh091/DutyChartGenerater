<!DOCTYPE html>
<?php
include 'connectivity.php';
include 'masterpage.php';
ob_start();
session_start();
if(isset($_POST['userid']) &&(isset($_POST['password']))){
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	if(!empty($userid) && !empty($password)){

		$query="SELECT `emp_id`,`password` FROM `mydb` WHERE `emp_id`='$userid' AND `password` ='$password'";
		
		if($query_run=mysql_query($query))
		{
		$query_run_num=mysql_num_rows($query_run);
			if($query_run_num==0){
			echo '<script language="javascript">';
			echo 'alert("Invalid User ID and Password!")';
			echo '</script>';
			}
			else{
			$user_emp_id=mysql_result($query_run,0,'emp_id');
			$_SESSION['user_emp_id']=$user_emp_id;
			//echo '<script language="javascript">';
			//echo 'alert("Login successful!")';
			//echo '</script>';
			
			$_SESSION["userid"]=$userid;
			header("Location: test.php");
		}
		}  
		else{
		echo 'error111111111111111111111111';
		}
	}
	else {
	echo 'error2222222222222222222222222222222';
	}
}
?>

<html>
<body style="overflow:hidden"> 
<div style="position:relative;top: -20px;left:1100px;font-size:22px;"><a href="signup.php" style="text-decoration:none;">Register </a>
|
<a href="main.php" style="text-decoration:none;">Login</a>
</div>
<div style="position:relative;top:150px;left:480px">
<fieldset style ="position: absolute;width=300px;">
<legend>Sign In</legend>
<form action="main.php" method="POST">
Employee ID:<input type="text" name="userid" placeholder="enter your ID" required><br></input>
Password :<input type="password" name="password" placeholder="enter password" required style="float='right'" ><br></input>
<button type="button " value="submit" style="position:relative;left:80px;">Submit</button>
<button type="reset" value="reset" style="position:relative;left:100px;">Reset</button>
<br>
<a href="signup.php">Do not have an account? Register here!</a>
</form>
</fieldset>
</div>

</body>
</html>