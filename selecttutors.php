<?php include("logincheck.php") ?>
<?php

include("dbcon.php");
$sql="SELECT * FROM tutors";

?>



<!DOCTYPE html>
<html>
<head>
	<title>List Of Tutors</title>
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
<body >
	<?php include("HEADER.php") ?>
	<div style="height: 400px;background-size: cover;border: 5px solid black;">
	<h3>Tutors List</h3>

	<table id="customers">
	<tr><th>ID</th>
		<th>Name</th>
		<th>gmail</th>
		<th>Contact Number</th>
		<th>Subject</th>
		<th>Actions</th></tr>
<?php
if($result=$con->query($sql)){

while ($row=$result->fetch_assoc()) {

	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['gmail']?></td>
		
		<td><?php echo $row['ph']?></td>
		<td><?php echo $row['subject']?></td>
		<td><a href="deltutors.php?id=<?php echo $row['id']?>" 
		onclick="return confirm('are u sure?')" style="color: black">Delete</a> |
		<a href="edittutors.php?id=<?php echo $row['id'] ?>" style="color: black"> Edit</a>
		</td>
	</tr>

	<?php
}

}

  ?>
  </table>
  <a href="dashboard.php">dashboard |</a>
  <a href="addtutors.php?id=<?php echo $row['id'] ?>">Add Tutors</a> 
  </div>
  <?php include ("footer.php"); ?>


</body>
</html>



