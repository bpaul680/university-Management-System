<?php include("logincheck.php") ?>

<?php	include("HEADER.php") ?>

<div style="height: 400px;background-image: url(images/l.jpg);background-size: cover;border: 5px solid black;">
	
	<h3 style="color: yellow">welcome - <?php echo $_SESSION['user']['name']?></h3>
	<p >
		
		<nav ><a href="select1.php" style="color: yellow">courses</a>|
			<a href="select.php" style="color: white">students</a>|
			<a href="selectbooks.php" style="color: yellow">Books</a>|
			<a href="selecttutors.php" style="color: white">Tutors</a>|
			<a href="selectoemp.php"style="color: yellow">Other Employes</a>

		</nav>
	</p>
</div>

<?php include("footer.php") ?>

	

</div>
</body>
</html>