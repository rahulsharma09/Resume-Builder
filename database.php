<?php 
	function connection()
	{
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "ResumeMaker";
		$con = new mysqli($host, $user, $password, $database);
		return $con;
	}
 ?>