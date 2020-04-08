<?php 
	include 'database.php';
	$con = connection();

	if(isset($_POST['submit']))
	{
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];

		$query1 = "INSERT INTO personal(fullname, email, contact, address) VALUES ('$fullname','$email','$contact','$address')";
		$res1 = mysqli_query($con, $query1);

		$hedu = $_POST['hedu'];
		$hinst = $_POST['hinst'];
		$hper = $_POST['hper'];
		$hdur = $_POST['hdur'];
		$huniversity = $_POST['huniversity'];
		$query2 = "INSERT INTO highestedu(education, institute, percentage, duration,university) VALUES('$hedu','$hinst','$hper','$hdur','$huniversity')";
		$res2 = mysqli_query($con, $query2);

		$sedu = $_POST['sedu'];
		$sinst = $_POST['sinst'];
		$sper = $_POST['sper'];
		$sdur = $_POST['sdur'];
		$suniversity = $_POST['suniversity'];
		$query3 = "INSERT INTO secondaryedu(education, institute, percentage, duration,university)VALUES('$sedu','$sinst','$sper','$sdur','$suniversity')";
		$res3 = mysqli_query($con, $query3);

		$school = $_POST['school'];
		$percent = $_POST['percent'];
		$year = $_POST['year'];

		$query4 = "INSERT INTO ssc(institute, percentage, duration) VALUES('$school','$percent','$year')";
		$res4 = mysqli_query($con, $query4);

		$cname; $crole; $cres; $cdur;
		if(isset($_POST['cname']))
		{
			$cname = $_POST['cname'];
		}
		if(isset($_POST['crole']))
		{
			$crole = $_POST['crole'];
		}
		if(isset($_POST['cres']))
		{
			$cres = $_POST['cres'];
		}
		if(isset($_POST['cdur']))
		{
			$cdur = $_POST['cdur'];
		}

		$query5 = "INSERT INTO internship (cname, crole, cres, cdur) VALUES ('$cname','$crole','$cres','$cdur')";
		$res5 = mysqli_query($con, $query5);

		if($res1 and $res2 and $res3 and $res4)
		{
			header("Location:technical.php");
		}
		else
		{
			echo'Some error was caught!!';
		}





	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter Details</title>
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

<div class="container">
  <h2 style="text-align: center">Enter the details</h2>
  <form method="post">
  	<label for="usr"><h3>Personal Details</h3></label>
    <div class="form-group">
      <label for="usr">Full Name:</label>
      <input type="text" name="fullname" class="form-control" id="usr" required>
    </div>

    <div class="form-group">
      <label for="usr">Email Id:</label>
      <input type="text" name="email" class="form-control" id="usr" required>
    </div>

    <div class="form-group">
      <label for="usr">Contact Number:</label>
      <input type="text" name="contact" class="form-control" id="usr" required>
    </div>

    <div class="form-group">
      <label for="usr">Address:</label>
      <input type="text" name="address" placeholder="City - Pin Code" class="form-control" id="usr" required>
    </div>

    <div class="form-group">
      <label for="usr">Internship Details:</label><br>
      <input type="checkbox" id="check" onclick="enableDisable(this.checked, 'textBox')"><span>   Check this box if availaible</span>
      <input type="text" name = "cname" class="form-control" id="name" placeholder="Name of company" style="margin-bottom: 2%;" disabled="true">
      <input type="text" name="crole" class="form-control" id="role" placeholder="Role assigned" style="margin-bottom: 2%;" disabled="true">
      <input type="text" name="cres" class="form-control" id="res" placeholder="Responsibilities" style="margin-bottom: 2%;" disabled="true">
      <input type="text" name="cdur" class="form-control" id="dur" placeholder="MM/YYYY - MM/YYYY" style="margin-bottom: 2%;" disabled="true">

      <script type="text/javascript">
      	function enableDisable(bEnable, textBoxID)
	    {
	         document.getElementById('name').disabled = !bEnable;
	         document.getElementById('role').disabled = !bEnable;
	         document.getElementById('res').disabled = !bEnable;
	         document.getElementById('dur').disabled = !bEnable;
	    }
      </script>

    </div>

     <div class="form-group">
      <label for="usr"><h3>Education:</h3></label>
      <div class="container">
      	<label for="usr">Highest Education</label>
      	<input type="text" name="hedu" class="form-control" id="res" placeholder="BE/ BTech/ Bcom..." style="margin-bottom: 2%;" required>

      	<label for="usr">Name of University</label>
      	<input type="text" name="huniversity" class="form-control" id="res"style="margin-bottom: 2%;" required>

      	<label for="usr">Institute Name:</label>
      	<input type="text" name="hinst" class="form-control" id="res" placeholder="Name of college" style="margin-bottom: 2%;" required>

      	<label for="usr">Percentage:</label>
      	<input type="text" name="hper" class="form-control" id="res" placeholder="Enter the percent" style="margin-bottom: 2%;" required>

      	<label for="usr">Duration</label>
      	<input type="text" name="hdur" class="form-control" id="res" placeholder="MM/YYYY - MM/YYYY" style="margin-bottom: 2%;" required>
      </div>


      <div class="container">
      	<label for="usr"><h4>Secondry Education (12th/Diploma)</h4></label>
      	<input type="text" name="sedu" class="form-control" id="res" placeholder="BE/ BTech/ Bcom..." style="margin-bottom: 2%;" required>

      	<label for="usr">Name of University</label>
      	<input type="text" name="suniversity" class="form-control" id="res" style="margin-bottom: 2%;" required>

      	<label for="usr">Institute Name:</label>
      	<input type="text" name="sinst" class="form-control" id="res" placeholder="Name of college" style="margin-bottom: 2%;" required>

      	<label for="usr">Percentage:</label>
      	<input type="text" name="sper" class="form-control" id="res" placeholder="Enter the percent" style="margin-bottom: 2%;" required>

      	<label for="usr">Duration</label>
      	<input type="text" name="sdur" class="form-control" id="res" placeholder="MM/YYYY - MM/YYYY" style="margin-bottom: 2%;" required>
      </div>


      <div class="container">
      	<label for="usr"><h4>SSC Education</h4></label><br>
      
      	<label for="usr">Institute Name:</label>
      	<input type="text" name="school" class="form-control" id="res" placeholder="Name of college" style="margin-bottom: 2%;" required>

      	<label for="usr">Percentage:</label>
      	<input type="text" name="percent" class="form-control" id="res" placeholder="Enter the percent" style="margin-bottom: 2%;" required>

      	<label for="usr">Duration</label>
      	<input type="text" name="year" class="form-control" id="res" placeholder="MM/YYYY - MM/YYYY" style="margin-bottom: 2%;" required>
      </div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 45%;margin-bottom: 5%;"><h4>Next</h4></button>

  </form>
</div>


</body>
</html>