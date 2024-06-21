<?php include("logincheck.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Tutors</title>

</head>
<body >
	<?php	include("HEADER.php") ?>
	<div style="background-image: url(images/t3.jpg);height: 400px;background-size: cover;text-align: center;border: 5px solid black;"  >
<h2 style="color: blue"><b>Add Tutors</b></h2>
	<form name="addcfrm" action="insert3.php" method="post">
		 	

		 	<input type="text" name="name" placeholder="enter name"><br><br>
		 	<input type="gmail" name="gmail" placeholder="enter gmail"><br><br>
		 	<input type="number" name="ph" placeholder="enter ph no"><br><br>
		 	<input type="text" name="subject" placeholder="enter subject"><br><br>
		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form></div>
	<?php include("footer.php") ?>

</body>
</html>