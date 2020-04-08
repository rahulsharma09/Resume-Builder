<?php
	include 'database.php';
	$con = connection();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Continue..</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

	<?php
		if(isset($_POST['yes']))
		{
			mysqli_query($con, "TRUNCATE personal");
			mysqli_query($con, "TRUNCATE internship");
			mysqli_query($con, "TRUNCATE highestedu");
			mysqli_query($con, "TRUNCATE project1");
			mysqli_query($con, "TRUNCATE project2");
			mysqli_query($con, "TRUNCATE project3");
			mysqli_query($con, "TRUNCATE secondaryedu");
			mysqli_query($con, "TRUNCATE skills");
			mysqli_query($con, "TRUNCATE ssc");
			header("location:index.php");
		}

		if(isset($_POST['no']))
		{
			header("location:resume.php");
		}
	?>
			
		<div class="w3-card w3-round w3-center" style="width: 50%; margin-left: 25%;">
			<h2>All the previous data will be lost..</h2>
			<p>Do you want to continue?</p>

			<form method="post" >
				<button class="w3-green w3-round w3-button w3-margin-bottom" name="yes" type="submit">Yes</button>
				<button class="w3-red w3-round w3-button w3-margin-bottom" name="no" type="submit">No</button>
			</form>
		</div>

</body>
</html>