<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<div style="text-align: center;background-color: cyan">
<?php

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
			echo "welcome"."<br>". $row['name'];exit;
		}else
		{
			echo "email/password is wrong";
		}
	}
}


?>


</div>



	<div style="text-align:center;border: 2px dashed cyan ">
		<h4>Login</h4>
		<form name="userfrm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				
				
				<input type="email" name="email" placeholder="enter email"><br><br>
				<input type="password" name="password" placeholder="enter password"><br><br>
				<input type="submit" name="" value="sign in">&nbsp
				&nbsp<input type="reset" name="" value="cancel"><br><br>


</body>
</html>