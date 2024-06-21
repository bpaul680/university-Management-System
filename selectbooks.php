
<?php

include("dbcon.php");
$sql="SELECT * FROM books";

?>
<?php include("logincheck.php") ?>


<!DOCTYPE html>
<html>
<head>
	<title>List Of Books</title>
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
	<div style="background-image: url(images/.jpg);height: 400px;background-size: cover;">
	<h3>Books List</h3>

	<table id="customers" >
	<tr><th>ID</th>
		<th>Name</th>
		<th>Author</th>
		<th>Edition</th>
		<th>Actions</th></tr>
<?php
if($result=$con->query($sql)){

while ($row=$result->fetch_assoc()) {

	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		
		<td><?php echo $row['author']?></td>
		<td><?php echo $row['edition']?></td>
		<td><a href="delbooks.php?id=<?php echo $row['id']?>" 
		onclick="return confirm('are u sure?')" style="color:blue;">Delete</a> |
		<a href="editbooks.php?id=<?php echo $row['id'] ?>" style="color: red;" > Edit</a>
		</td>
	</tr>

	<?php
}

}

  ?>
  </table>
 
 
  <a href="dashboard.php" style="color: blue;">dashboard |</a>
  <a href="addbooks.php?id=<?php echo $row['id'] ?>"  >add Books</a> 
 
   </div>
  <?php include ("footer.php"); ?>


</body>
</html>



