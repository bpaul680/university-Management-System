<?php include("logincheck.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employes </title>

</head>
<body >
	<?php	include("HEADER.php") ?>
	<div style="text-align: center;border: 5px solid black; background-image: url(images/e2.jpg);height: 400px;background-size: cover;"  >
<h2><i>Add Employes</i></h2>
	<form name="addcfrm" action="insert4.php" method="post">
		 	

		 	<input type="text" name="name" placeholder="enter name"><br><br>
		 	<input type="gmail" name="gmail" placeholder="enter gmail"><br><br>
		 	<input type="number" name="ph" placeholder="enter ph no"><br><br>
		 	<input type="text" name="duty" placeholder="enter duty"><br><br>
		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form></div>
	<?php include("footer.php") ?>

</body>
</html>