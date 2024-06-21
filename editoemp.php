<?php include("logincheck.php") ?>


<?php

	include("dbcon.php");
	if(isset($_GET['id']) && !empty($_GET['id']))
	{

		//echo "<pre>";print_r($_GET);exit;
		$id=$_GET['id'];
		$sql="SELECT * FROM employes WHERE id=$id";
		if($result=$con->query($sql)){
			$row1=$result->fetch_assoc();
		}
	}
	if(isset($_POST) && !empty($_POST)){
		//echo "<pre>";print_r($_POST);exit;
		$id=$_POST['id'];
	$name=$_POST['name'];
	$gmail=$_POST['gmail'];
	$ph=$_POST['ph'];
	$duty=$_POST['duty'];

	$sql="UPDATE employes SET name='$name',gmail='$gmail',ph='$ph',duty='$duty' WHERE id=$id";

	if ($con->query($sql)) 

		header("location:selectoemp.php");
		
		else
			echo "try again";
		# code...
	}


  ?>
 
  <!DOCTYPE html>
<html>
<head>
	<title>Edit Employes</title>

</head>
<body >
	<?php include("HEADER.php") ?>
	
	<div style="text-align: center; background-image: url(images/222.jpg);height: 400px;background-size: cover;border: 5px solid black"  >
<h2><i>Edit Employes</i></h2>
	<form name="editfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		 <input type="hidden" name="id" value="<?php echo $row1['id']?>">
		 	<input type="text" name="name" placeholder="enter name" value="<?php echo $row1['name']?>"><br><br>
		 	<input type="gmail" name="gmail" placeholder="enter gmail" value="<?php echo $row1['gmail']?>" ><br><br>
		 	<input type="number" name="ph" placeholder="enter contact number" value="<?php echo $row1['ph']?>" ><br><br>
		 	<input type="text" name="duty" placeholder="enter duty" value="<?php echo $row1['duty']?>"><br><br>
		 	

		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form></div>
	<?php include("footer.php") ?>

</body>
</html>