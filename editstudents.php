<?php include("logincheck.php") ?>


<?php

	include("dbcon.php");
	if(isset($_GET['id']) && !empty($_GET['id']))
	{

		//echo "<pre>";print_r($_GET);exit;
		$id=$_GET['id'];
		$sql="SELECT * FROM students WHERE id=$id";
		if($result=$con->query($sql)){
			$row1=$result->fetch_assoc();
		}
	}
	if(isset($_POST) && !empty($_POST)){
		//echo "<pre>";print_r($_POST);exit;
		$id=$_POST['id'];
	$name=$_POST['name'];
	$cid=$_POST['cid'];

	$sql="UPDATE students SET name='$name',c_id='$cid' WHERE id=$id";

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
	<title>Edit Students</title>
	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=reset]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>
<body>
	<?php include("HEADER.php") ?>
	<div style="text-align: center;  height: 400px;background-size: cover;">
<h2>Edit Students</h2>
	<form name="editfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		 <input type="hidden" name="id" value="<?php echo $row1['id']?>">
		 	<input type="text" name="name" value="<?php echo $row1['name']?>"><br><br>
		 	<select name="cid" >

		 		<?php
		 		$sql="SELECT * FROM courses";

		 		if($result=$con->query($sql)){

		 			while($row=$result->fetch_assoc()){

		 				?>
		 				<option value="<?php echo $row['id']?>" <?php echo ($row['id']==$row1['c_id'])?"selected":""?>> <?php echo $row['cname']?> </option>
		 				<?php
		 			}
		 		}
		 		?>
		 		

		 	</select><br><br>

		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form>
</div>
	<?php include("footer.php") ?>

</body>
</html>