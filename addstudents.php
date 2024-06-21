<?php include("logincheck.php") ;

 include("dbcon.php");
		include("HEADER.php");
		 $sql="SELECT * FROM courses"?>
		 <!DOCTYPE html>
		 <html>
		 <head>
		 	<title>ADD STUDENTS</title>
		 	
		 	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset]:hover {
  background-color: #45a049;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
		 </head>
		 
		 <div style="text-align: center;  height: 400px;background-size: cover;">
<h2>ADD STUDENTS</h2>
	<form name="addcfrm" action="insert1.php" method="post">
		 	
		 	<input type="text" name="name" placeholder="enter name"><br><br>
		 	<select name="cid" >

		 		<?php 
		 		if($result=$con->query($sql)){

		 			while($row=$result->fetch_assoc()){

		 				?>
		 				<option value="<?php echo $row['id']?>" > <?php echo $row['cname']?> </option>
		 				<?php
		 			}
		 		}
		 		?>
		 		

		 	</select><br><br>
		 	

		 	<input type="submit" name="" value="add">
		 	<input type="reset" name="" value="cancel">

	</form>
	</div>
	<?php include("footer.php") ?>

	<!--">-->
	


</body>
</html>