<html>
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
	 $roll=$_GET["rollno"];
	 $nme=$_GET["name"];
	 $dept=$_GET["dept"];
	 $clg=$_GET["college"];
	 $q="update details set name='$nme',department='$dept',college='$clg' where rollno='$roll'";
	 $result = mysqli_query($con,$q);
     if($result)
	 {
		 echo "successfully edited";
		 header('Location:start1.php');
	 }
  ?>
</html>