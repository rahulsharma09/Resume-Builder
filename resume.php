<?php 
	include 'database.php';
	$con = connection();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style type="text/css">

	.address{
		
		margin-top: 2%;
	}

	.name{
		display: flex;
		justify-content: center;
		width: 20%;
		margin-left:40%;
	}

	.contact{
		display: flex;
		justify-content: right;
		margin-top: -3%;
	}

	.header{
		background-color: ;	
		margin: 3.8%;
		margin-left: 10%;	
		width: 80%;
	}

	.mid{
		margin-top: 1%;
	}

	.cname{
		margin-left: 30%;
	}

	

</style>
<body>
	<?php
		if(isset($_POST['generate']))
		{
			header("location:continue.php");
		}
	?>
	 <?php

	 $res = mysqli_query($con, "SELECT * FROM personal");
	 while ($row = $res->fetch_assoc()) {
		    $name = $row['fullname'];
		    $address = $row['address'];
		    $contact = $row['contact'];
		    $email = $row['email'];
		}
	

	$res = mysqli_query($con, "SELECT * FROM internship");
	 while ($row = $res->fetch_assoc()) {
		    $cname = $row['cname'];
		    $crole = $row['crole'];
		    $cres = $row['cres'];
		    $cdur = $row['cdur'];
		}

	$res = mysqli_query($con, "SELECT * FROM highestedu");
	 while ($row = $res->fetch_assoc()) 
	 {
		    $education = $row['education'];
		    $institute = $row['institute'];
		    $percentage = $row['percentage'];
		    $duration = $row['duration'];
		}

	$res = mysqli_query($con, "SELECT * FROM secondaryedu");
	 while ($row = $res->fetch_assoc()) 
	 {
		    $sec_education = $row['education'];
		    $sec_institute = $row['institute'];
		    $sec_percentage = $row['percentage'];
		    $sec_duration = $row['duration'];
		}

	$res = mysqli_query($con, "SELECT * FROM ssc");
	 while ($row = $res->fetch_assoc()) 
	 {
		    $ssc_institute = $row['institute'];
		    $ssc_percentage = $row['percentage'];
		    $ssc_duration = $row['duration'];
		}

	$res = mysqli_query($con, "SELECT * FROM project1");
	 while ($row = $res->fetch_assoc()) 
	 {
		    $p1_name = $row['p1_name'];
		    $p1_des = $row['p1_des'];
		    $p1_tech = $row['p1_tech'];
		}

	$res = mysqli_query($con, "SELECT * FROM project2");
	 while ($row = $res->fetch_assoc()) 
	 {
		    $p2_name = $row['Name'];
		    $p2_des = $row['Description'];
		    $p2_tech = $row['Technologies'];
		}

	$res = mysqli_query($con, "SELECT * FROM project3");
	 while ($row = $res->fetch_assoc()) 
	 {
		    $p3_name = $row['Name'];
		    $p3_des = $row['Description'];
		    $p3_tech = $row['Technologies'];
		}

	$res = mysqli_query($con, "SELECT * FROM project4");
	 while ($row = $res->fetch_assoc()) 
	 {
		    $p4_name = $row['Name'];
		    $p4_des = $row['Description'];
		    $p4_tech = $row['Technologies'];
		}

	$res = mysqli_query($con, "SELECT * FROM skills");
	 while ($row = $res->fetch_assoc()) 
	 {
		    $tech = $row['technologies'];
		    $ide = $row['ide'];
		}


			echo "<div>

				<h2 class='w3-center'>Your Resume is ready!!</h2>

				  </div>";

	   
			echo "<div class='header w3-panel w3-border w3-border-black'>
      				<div class='w3-row'>

      				<div class=' w3-quarter w3-margin-top'>
      					<span class='address'>$address</span>
      				</div>

      				<div class='w3-half w3-center  w3-margin-top'>
      				<span class=' w3-xlarge w3-center'><b>$name</b></span>
      				</div>

      				<div class='w3-quarter w3-margin-top'>
      				<span class='contact'>$contact <br> $email</span>
      				</div>

      				</div>
      				
      				<div class='mid'>
      				<h3><b>Experience</b></h3>
      				<hr class='w3-border w3-border-black'>

      				<span class='w3-large'>$crole </span>
      				<span class = 'w3-large cname w3-center'> $cname </span>
      				<span class=' w3-large w3-right'>$cdur</span>
      				<p><b>Responsibilities:</b></p>
      				<span>$cres</p>

      				</div>

      				<div class='mid'>
      				<h3><b>Education</b></h3>
      				<hr class='w3-border w3-border-black'>

      				<li  style='float:left'><span class='w3-large'>$education </span></li>
      				<span class = 'w3-large cname' style='margin-left:42%;'> Mumbai University </span>
      				<span class=' w3-large w3-right'>$duration</span><br/>
      				<span class=' w3-left' style='margin-left:2%'>$institute</span><br/>
      				<p class=' w3-left' style='margin-left:2%'>CGPA: $percentage</p>

      				<br/><br/><br/>


      				<li  style='float:left'><span class='w3-large'>$sec_education </span></li>
      				<span class = 'w3-large cname' style='margin-left:42%;'> M.S.B.T.E </span>
      				<span class=' w3-large w3-right'>$sec_duration</span><br/>
      				<span class=' w3-left' style='margin-left:2%'>$sec_institute</span><br/>
      				<p class=' w3-left' style='margin-left:2%'>Percentage: $sec_percentage</p>

      				<br/><br/><br/>


      				<li  style='float:left'><span class='w3-large'>10 <sup>th</sup> </span></li>
      				<span class = 'w3-large cname' style='margin-left:46%;'> SSC</span>
      				<span class=' w3-large w3-right'>$ssc_duration</span><br/>
      				<span class=' w3-left' style='margin-left:2%'>$ssc_institute</span><br/>
      				<p class=' w3-left' style='margin-left:2%'>Percentage: $ssc_percentage</p>

      				
      				</div><br/><br/>

      				<div class='mid'>
      				<h3><b>Projects</b></h3>
      				<hr class='w3-border w3-border-black'>

      				<ul>
      					<li class='w3-large' id='p1' style='float:left'>$p1_name:</li>&nbsp
      					<span>$p1_des</span>
      					<p>Technologies Used: $p1_tech</p>

      					<div id='p2'>
      					<li class='w3-large' style='float:left'>$p2_name: </li>&nbsp
      					<span>$p2_des</span>
      					<p>Technologies Used: $p2_tech</p>
      					</div>

      					<div id='p3'>
      					<li class='w3-large' style='float:left'>$p3_name: </li>&nbsp
      					<span>$p3_des</span>
      					<p>Technologies Used: $p3_tech</p>
      					</div>

      					<div id='p4'>
      					<li class='w3-large' style='float:left'>$p4_name: </li>&nbsp
      					<span>$p4_des</span>
      					<p>Technologies Used: $p4_tech</p>
      					</div>
      				</ul>
      				</div>



      				<div class='mid'>
      				<h3><b>Languages and Technologies</b></h3>
      				<hr class='w3-border w3-border-black'>

      				<ul>
      					<li>$tech</li>

      					<li>$ide</li>
      				</ul>

      				</div>
	      			</div>

	      			<form method='post'>

	      			<div class='w3-center w3-margin-bottom'>
      					<button class='w3-button w3-round w3-blue' type='submit' name = 'generate'>Generate Other resume</button>
      				</div>

      				</form>


	      		  ";

	      		
      ?>

  





	
</body>
</html>