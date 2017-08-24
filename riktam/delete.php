<html>
	<head>
		<h1>Student details</h1>
	</head>
	<body>
		<?php
			  $DB_host = "localhost";
			  $DB_user = "root";
			  $DB_pass = "";
			  $DB_name = "student";  
			  $con=mysqli_connect($DB_host,$DB_user, $DB_pass ,$DB_name);
				 if($con->connect_errno)
				 {
					 die("ERROR : -> ".$con->connect_error);
				 }
			    $roll=$_GET["id"];
			   $query = "delete from details where rollno='$roll'";
			   $data = mysqli_query ($con,$query)or die(mysqli_error($con)); 
			   if($data)
			   { 
				 header('Location:start1.php');
			   }
		?>
	</body>