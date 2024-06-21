<?php 

	$host="localhost";
	$user="root";
	$password="";
	$database="mywbut";

	$con= new mysqli($host,$user,$password,$database);
	if ($con->connect_error) 
		die($con->connect_error);
	else
		//echo "connection done!";
		
		
		
 ?>