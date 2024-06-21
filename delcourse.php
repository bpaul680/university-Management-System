<?php
include("dbcon1.php");
	if(isset($_GET['id']) && !empty($_GET['id']))
	{

		//echo "<pre>";print_r($_GET);exit;
		$id=$_GET['id'];
		$sql1="SELECT count(id) FROM students WHERE c_id=$id";
		$result=$con->query($sql1);
		$row=$result->fetch_array();
		if($row['count(id)']!=0)
			echo "student exists ";


		
		else{

		    $sql= "DELETE FROM courses WHERE id=$id ";
		//echo $sql;
		if($con->query($sql))
						
	header("location:select1.php");
		else
			echo "try again";
	}
	}

  ?>