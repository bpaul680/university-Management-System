<?php include("logincheck.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>add course</title>

</head>
<body >
	<?php	include("HEADER.php") ?>
	
	<div style="text-align: center; background-image: url(images/c.png);height: 400px;background-size: fit;">
<h2>Add Course</h2>
	<form name="addcfrm" action="insert.php" method="post">
		 	
		 	<input type="text" name="cname" placeholder="enter cname"><br><br>
		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form>
</div>
	<?php include("footer.php") ?>

</body>
</html>