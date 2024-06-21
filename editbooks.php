<?php include("logincheck.php") ?>


<?php

	include("dbcon.php");
	if(isset($_GET['id']) && !empty($_GET['id']))
	{

		//echo "<pre>";print_r($_GET);exit;
		$id=$_GET['id'];
		$sql="SELECT * FROM books WHERE id=$id";
		if($result=$con->query($sql)){
			$row1=$result->fetch_assoc();
		}
	}
	if(isset($_POST) && !empty($_POST)){
		//echo "<pre>";print_r($_POST);exit;
		$id=$_POST['id'];
	$name=$_POST['name'];
	$author=$_POST['author'];
	$edition=$_POST['edition'];

	$sql="UPDATE books SET name='$name',author='$author',edition='$edition' WHERE id=$id";

	if ($con->query($sql)) 

		header("location:selectbooks.php");
		
		else
			echo "try again";
		# code...
	}


  ?>
 
  <!DOCTYPE html>
<html>
<head>
	<title>Edit Books</title>

</head>
<body ">
	<?php include("HEADER.php") ?>
	
	<div style="background-image: url(images/booksadd.jpg);height: 400px;background-size: cover;"  >
<h2>Edit Books</h2>
	<form name="editfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		 <input type="hidden" name="id" value="<?php echo $row1['id']?>">
		 	<input type="text" name="name" placeholder="enter name" value="<?php echo $row1['name']?>"><br><br>
		 	<input type="text" name="author" placeholder="enter author" value="<?php echo $row1['author']?>" ><br><br>
		 	<input type="text" name="edition" placeholder="enter edition" value="<?php echo $row1['edition']?>"><br><br>
		 	

		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form></div>
	<?php include("footer.php") ?>

</body>
</html>