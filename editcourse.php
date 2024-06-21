
<?php include("logincheck.php") ?>
<?php

	include("dbcon1.php");

	if(isset($_GET['id']) && !empty($_GET['id']))
	{

		//echo "<pre>";print_r($_GET);exit;
		$id=$_GET['id'];
		$sql="SELECT * FROM courses WHERE id=$id";
		if($result=$con->query($sql)){
			$row=$result->fetch_assoc();
		}
	}
	if(isset($_POST) && !empty($_POST)){
		//echo "<pre>";print_r($_POST);exit;
		$id=$_POST['id'];
	$cname=$_POST['cname'];

	$sql="UPDATE courses SET cname='$cname' WHERE id=$id";

	if ($con->query($sql)) 

		header("location:select1.php");
		
		else
			echo "try again";
		# code...
	}


  ?>
 
  <!DOCTYPE html>
<html>
<head>
	<title>Edit Course</title>

</head>
<body >
	<?php	include("HEADER.php") ?>
	<div style="text-align: center; background-image: url(images/c.png);height: 400px;background-size: fit;">
<h2>Edit Course</h2>
	<form name="editfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		 <input type="hidden" name="id" value="<?php echo $row['id']?>">
		 	<input type="text" name="cname" value="<?php echo $row['cname']?>"><br><br>
		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form>
</div>
	<?php include("footer.php") ?>

</body>
</html>