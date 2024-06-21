<?php
include("dbcon1.php");
	if(isset($_POST) && !empty($_POST)){


		//echo "<Pre>";print_r($_POST);exit;

		$name=$_POST['name'];
		$author=$_POST['author'];
		$edition=$_POST['edition'];

		$sql="INSERT INTO books(name,author,edition) VALUES('$name','$author','$edition')";

		//echo $sql;

		if($con->query($sql)){

			header("location:selectbooks.php");

		}
		else
			echo "try agin";

	}










  ?>