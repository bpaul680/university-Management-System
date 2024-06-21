<?php
include("dbcon.php");
	if(isset($_POST) && !empty($_POST)){


		//echo "<Pre>";print_r($_POST);exit;

		//echo $_POST['cid'];
		$name=$_POST['name'];
		$cid=$_POST['cid'];
		//$cname=$_POST['cname'];
				


		$sql="INSERT INTO students(name,c_id) VALUES('$name','$cid')";

		//echo $sql;

		if($con->query($sql)){

			
			header("location:select.php");

		}
		else
			echo "try agin";

	}
?>









  ?>