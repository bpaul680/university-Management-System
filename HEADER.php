<!DOCTYPE html>
<html>
<head>
	<title>user dashboard</title>
	<style type="text/css">
		

		#uname{

			font-size: 9pt;
			float:right;
			color: cyan;
		}


	</style>
</head>
<body>
	<header>
	<div style="background-color: green;height: 25px">
	<p id="uname"><?php echo $_SESSION['user']['name'] ?>|<a href="logout.php" style="color: cyan">logout</a>
	</p>
</div>
</header>