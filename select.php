<?php

include("dbcon.php");
$sql="SELECT s.*,c.cname  FROM students s INNER JOIN courses c ON c.id=s.c_id";

?>
<?php include("logincheck.php") ?>


<!DOCTYPE html>
<html>
<head>
	<title>list of students</title>
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

#customers tr:nth-child(even){background-color: #f2f2f2;}

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
	<div style="color: red; background-image: url(images/s.jpg);height: 400px;background-size: cover;">
	<h3>Students List</h3>

	<table id="customers">
	<tr><th>ID</th>
		<th>Name</th>
		<th>Course</th>
		<th>Actions</th></tr>
<?php
if($result=$con->query($sql)){

while ($row=$result->fetch_assoc()) {

	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['cname']?></td>
		<td><a href="delstudents.php?id=<?php echo $row['id']?>" 
		onclick="return confirm('are u sure?')" style="color: red">Delete</a> |
		<a href="editstudents.php?id=<?php echo $row['id'] ?>" style="color: black"> Edit</a>
		</td>
	</tr>

	<?php
}

}

  ?>
  </table>
  <a href="dashboard.php" style="color: black">dashboard |</a><br>
  <a href="addstudents.php?id=<?php echo $row['id'] ?>" style="color: black">add students</a> 
  </div>
  <?php include ("footer.php"); ?>


</body>
</html>



