<html>
<head>
  <link rel="stylesheet" href="nav.css">
</head>
<body><!--<div class="headerlogo">
    <img src="headercse.jpg" height="180" width="1225"/></div>
  <div class="topnav" id="mytopnav">
  <a href="insert1.php">insert</a>
  <a href="update.php">update</a>
  </div>-->
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
   $roll=$_POST['rollno'];
   $name=$_POST['name'];
   $sec=$_POST['dept'];
   $year=$_POST['college'];
   $query = "INSERT INTO details (rollno,name,department,college) VALUES ('$roll','$name','$sec','$year')";
   $data = mysqli_query ($con,$query)or die(mysqli_error($con)); 
   if($data)
   { 
     header('Location:start1.php');
   }
?>
</body>
<html>