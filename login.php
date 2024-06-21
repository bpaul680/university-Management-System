<?php
session_start();
include("dbcon.php");
if(isset($_POST)&& !empty($_POST))
{

	//echo "<pre>";print_r($_POST);echo "</pre>";exit;

	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
	if($result=$con->query($sql))
	{
		$row=$result->fetch_assoc();
		if(!empty($row))
		{
			//echo "welcome"."<br>". $row['name'];exit;
			$_SESSION['user']=$row;
			header("location:dashboard.php");
		}else
		{
			echo "email/password is wrong";
		}
	}
}


?>





<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body  style="background-image: url(images/best.jpg);background-size: cover;">
	<div style=" text-align:center;border: 2px dashed cyan;background-image: url(images/best.jpg);background-size: cover;">
		<h2 style="color:white ">Login</h2>
		<form   name="userfrm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
		
				
				
				<input type="email" name="email" placeholder="enter email"><br><br>
				<input type="password" name="password" placeholder="enter password"><br><br>
				
				<input type="submit" name="" value="sign in">&nbsp
				&nbsp<input type="reset" name="" value="cancel"><br><br>
				<p style="color: cyan">Not Registered?Click to<a href="signup.php" style="color:white">Sign up</a></p></form></div>


</body>
</html>