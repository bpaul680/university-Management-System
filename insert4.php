<?php
include("dbcon1.php");
	if(isset($_POST) && !empty($_POST)){


		//echo "<Pre>";print_r($_POST);exit;

		$name=$_POST['name'];
		$gmail=$_POST['gmail'];
		$ph=$_POST['ph'];
		$duty=$_POST['duty'];

		$sql="INSERT INTO employes(name,gmail,ph,duty) VALUES('$name','$gmail','$ph','$duty')";

		//echo $sql;

		if($con->query($sql)){

			header("location:selectoemp.php");

		}
		else
			echo "try agin";

	}










  ?>