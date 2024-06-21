<?php include("logincheck.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>add Books</title>

</head>
<body >
	<?php	include("HEADER.php") ?>
	<div style="background-image: url(images/booksadd.jpg);height: 400px;background-size: cover;"  >
<h2>Add Books</h2>
	<form name="addcfrm" action="insert2.php" method="post">
		 	

		 	<input type="text" name="name" placeholder="enter name"><br><br>
		 	<input type="text" name="author" placeholder="enter author"><br><br>
		 	<input type="text" name="edition" placeholder="enter edition"><br><br>
		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form></div>
	<?php include("footer.php") ?>

</body>
</html>