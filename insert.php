<?php
include("dbcon1.php");
	if(isset($_POST) && !empty($_POST)){


		//echo "<Pre>";print_r($_POST);exit;

		$cname=$_POST['cname'];

		$sql="INSERT INTO courses(cname) VALUES('$cname')";

		//echo $sql;

		if($con->query($sql)){

			header("location:select1.php");

		}
		else
			echo "try agin";

	}










  ?>