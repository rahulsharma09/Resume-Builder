<?php 
	include 'database.php';
	$con = connection();
 ?>

 <?php 
		
	 	
	 	$p4_name; $p4_des; $p4_tech;
 	

 	if(isset($_POST['submit']))
 	{
 		

 		$techKnown = $_POST['techKnown'];
	 	$ideKnown = $_POST['ideKnown'];
	 	$query1 = "INSERT INTO skills(technologies, ide)VALUES('$techKnown', '$ideKnown')";
	 	$res1 = mysqli_query($con, $query1);

	 	$p1_name = $_POST['p1_name'];
	 	$p1_des = $_POST['p1_des'];
	 	$p1_tech = $_POST['p1_tech'];
	 	$query2 = "INSERT INTO project1(p1_name, p1_des,p1_tech)VALUES('$p1_name','$p1_des','$p1_tech')";
	 	$res2 = mysqli_query($con, $query2);

	 	if(isset($_POST['p2_name']))
	 	{
	 		$p2_name = $_POST['p2_name'];
	 		$p2_des = $_POST['p2_des'];
	 		$p2_tech = $_POST['p2_tech'];
	 		$query3 = "INSERT INTO project2(Name, Description, Technologies)VALUES('$p2_name','$p2_des','$p2_tech')";
	 		$res3 = mysqli_query($con, $query3);
	 	}
	 	
	 	if(isset($_POST['p3_name']))
	 	{
	 		$p3_name = $_POST['p3_name'];
	 		$p3_des = $_POST['p3_des'];
	 		$p3_tech = $_POST['p3_tech'];
	 		$query4 = "INSERT INTO project3(Name, Description, Technologies)VALUES('$p3_name','$p3_des','$p3_tech')";
	 		$res4 = mysqli_query($con, $query4);
	 	}
	 	
	    if(isset($_POST['p4_name']))
	 	{
	 		$p4_name = $_POST['p4_name'];
	 		$p4_des = $_POST['p4_des'];
	 		$p4_tech = $_POST['p4_tech'];
	 		$query5 = "INSERT INTO project4(Name, Description, Technologies)VALUES('$p4_name','$p4_des','$p4_tech')";
	 		$res5 = mysqli_query($con, $query5);
	 	}

	 	if($res1 and $res2)
	 	{
	 		header("Location:resume.php");
	 	}
	 	else
	 	{
	 		echo'Some error was caught';
	 	}

 	}

 	


  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Technical Details</title>
	<style type="">
		button{
			width:10%;
			margin-bottom: 10%;
		}
	</style>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>

<form method="post">
	<div class="form-group">
	<h2 style="text-align: center;">Enter Technical Details</h2>


	<div class="container">
      <label for="usr" ><h3>Enter Technologies Known:</h3></label>
      	<input type="text" name="techKnown" class="form-control" id="res" placeholder="Eg:Java, Python, HTML, etc..." style="margin-bottom: 2%;" required>
      </div>

      <div class="container">
      <label for="usr" ><h3>Enter IDE's Known:</h3></label>
      	<input type="text" name="ideKnown" class="form-control" id="res" placeholder="Eg:Pycharm, VSCode, Web Storm, etc..." style="margin-bottom: 2%;" required>
      	<span style="color: red"><b>Note: Please type NA if you don't know any IDE</b></span>
      </div>

      <div class="container">
      <label for="usr" ><h3>Project Details (Min 4):</h3></label>
      <div class="container">
      	<label for="usr"><h4>Project 1</h4></label>
      	<input type="text" name="p1_name" class="form-control" id="res" placeholder="Name of project" style="margin-bottom: 2%;" required>

      	<label for="usr">Description (2-3 lines):</label>
      	<textarea name="p1_des" class="form-control" rows="3" id="comment" required></textarea>

      	<label for="usr">Technologies Used:</label>
      	<input type="text" name="p1_tech" class="form-control" id="res" placeholder="Eg: Java, HTML, Python etc...cent" style="margin-bottom: 2%;" required>

      </div>
      </div>

      <div class="container">
      	     
      	<label for="usr"><h4>Project 2</h4></label>
      	<input type="text" class="form-control" name="p2_name" id="name_p2" placeholder="Name of project" style="margin-bottom: 2%;" required>

      	<label for="usr">Description (2-3 lines):</label>
      	<textarea class="form-control" rows="3" name="p2_des" id="des_p2"  required></textarea>

      	<label for="usr">Technologies Used:</label>
      	<input type="text" class="form-control" name="p2_tech" id="tech_p2"  placeholder="Eg: Java, HTML, Python etc...cent" style="margin-bottom: 2%;" required>

      
      </div>
      </div>

      <div class="container">
      	
      	<label for="usr"><h4>Project 3</h4></label>
      	<input type="text" class="form-control" name="p3_name" id="name_p3" placeholder="Name of project" style="margin-bottom: 2%;" required>

      	<label for="usr">Description (2-3 lines):</label>
      	<textarea class="form-control" rows="3" name="p3_des" id="des_p3" required></textarea>

      	<label for="usr">Technologies Used:</label>
      	<input type="text" class="form-control" name="p3_tech" id="tech_p3" placeholder="Eg: Java, HTML, Python etc...cent" style="margin-bottom: 2%;" required>
      </div>
      </div>


      <div class="container">
      
      	<label for="usr"><h4>Project 4</h4></label>
      	<input type="text" class="form-control" name="p4_name" id="name_p4" placeholder="Name of project" style="margin-bottom: 2%;" required>

      	<label for="usr">Description (2-3 lines):</label>
      	<textarea class="form-control" rows="3" name="p4_des" id="des_p4" required></textarea>

      	<label for="usr">Technologies Used:</label>
      	<input type="text" class="form-control" name="p4_tech" id="tech_p4" placeholder="Eg: Java, HTML, Python etc...cent" style="margin-bottom: 2%;" required>
      </div>
      </div>
  </div>

   <button type="submit" name="submit" class="btn btn-success" style="margin-left: 45%;margin-bottom: 5%;"><h4>Generate</h4></button>

      </div>


	

</form>

</body>
</html>