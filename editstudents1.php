<?php include("logincheck.php") ?>


<?php

	include("dbcon.php");
	if(isset($_GET['id']) && !empty($_GET['id']))
	{

		//echo "<pre>";print_r($_GET);exit;
		$id=$_GET['id'];
		$sql="SELECT * FROM students WHERE id=$id";
		if($result=$con->query($sql)){
			$row=$result->fetch_assoc();
		}
	}
	if(isset($_POST) && !empty($_POST)){
		//echo "<pre>";print_r($_POST);exit;
		$id=$_POST['id'];
	$name=$_POST['name'];
	$c_id=$_POST['c_id'];

	$sql="UPDATE students SET name='$name',c_id='$c_id' WHERE id=$id";

	if ($con->query($sql)) 

		header("location:select.php");
		
		else
			echo "try again";
		# code...
	}


  ?>
 
  <!DOCTYPE html>
<html>
<head>
	<title>edit students</title>

</head>
<body>
	<?php include("HEADER.php") ?>
<h2>edit students</h2>
	<form name="editfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		 <input type="hidden" name="id" value="<?php echo $row['id']?>">
		 	<input type="text" name="name" value="<?php echo $row['name']?>"><br><br>
		 	<input type="text" name="c_id" value="<?php echo $row['c_id'] ?>"><br><br>


		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form>
	<?php include("footer.php") ?>

</body>
</html>