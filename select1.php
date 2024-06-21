<?php

include("dbcon1.php");
$sql="SELECT * FROM courses";

?>
<?php include("logincheck.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>list of courses</title>
	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

/*#customers tr:nth-child(even){background-color: #f2f2f2;}*/

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
	<?php include("HEADER.php") ?>
	<div style="height: 700px;background-size: fit;"  >

	<table id="customers" ">
	<tr><th>ID</th><th>Course name</th><th>actions</th></tr>
<?php
if($result=$con->query($sql)){

while ($row=$result->fetch_assoc()) {

	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['cname']?></td>
		<td><a href="delcourse.php?id=<?php echo $row['id']?>" 
		onclick="return confirm('are u sure?')" style="color: red">Delete</a> |
		<a href="editcourse.php?id=<?php echo $row['id']?>"  style="color: red"> 
		Edit</a>
 
	</td>
	</tr>
	<?php
}

}


  ?>
  </table>
  <a href="dashboard.php" style="color: blue"><b>dashboard |</b>   </a><br>
  <a href="addcourse.php?id=<?php echo $row['id'] ?>" style="color: blue"><b>add course</b></a>
  </div>
  <?php include ("footer.php"); ?>


</body>
</html>



