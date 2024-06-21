<?php
include("dbcon1.php");
	if(isset($_POST) && !empty($_POST)){


		//echo "<Pre>";print_r($_POST);exit;

		$name=$_POST['name'];
		$gmail=$_POST['gmail'];
		$ph=$_POST['ph'];
		$subject=$_POST['subject'];

		$sql="INSERT INTO tutors(name,gmail,ph,subject) VALUES('$name','$gmail','$ph','$subject')";

		//echo $sql;

		if($con->query($sql)){

			header("location:selecttutors.php");

		}
		else
			echo "try agin";

	}










  ?>