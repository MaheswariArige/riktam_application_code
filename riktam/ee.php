<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Form</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	   <style type="text/css">
	   #formdiv{
	   width:15%;
	   }
	   </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
 
$link = mysqli_connect($servername, $username, $password,$dbname); 
if($link->connect_errno)
{
	die("error->:".$link->connect_error);
}
$id=$_GET["id"];
$sql = "SELECT * FROM details where rollno=$id";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
$row =  mysqli_fetch_row($result);
?></br></br>
<center><h2>Edit Student Form</h2></center></br></br>
		<div class="container" id="formdiv">
			<div class="row main">
				<div class="main-login main-center">
					<form background="cyan" class="" width="500" action="edit_link.php" method="get">
					   <div class="form-group">
							<label for="rollno" class="cols-sm-5 control-label">Edit registration number</label>
							<div class="cols-sm-100">
								<div class="input-group">
									<input type="text" align="center" class="form-control" readonly="readonly" value="<?php echo $row[0];?>" name="rollno" id="id"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="cols-sm-5 control-label">Edit Name</label>
							<div class="cols-sm-100">
								<div class="input-group">
									<input type="text" required class="form-control" value="<?php echo $row[1];?>" name="name" id="studentName"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="dept" class="cols-sm-5 control-label">Edit department</label>
							<div class="cols-sm-100">
								<div class="input-group">
					<select name="dept" style="width:200px" height="20" class="form-control">
						<?php $x=$row[2];
						$s=array("CSE","ECE","EEE","MECH","CIVIL","CHEMICAL")?>
						<option><?php echo $row[2]?></option><?php
						for($i=0;$i<6;$i++){ 
							if($s[$i]!=$row[2]){?>
								<option><?php echo $s[$i];}}?></option>						
					</select>								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="college" class="cols-sm-5 control-label">Edit college</label>
							<div class="cols-sm-100">
								<div class="input-group">
					<select name="college" class="form-control" style="width:200px" height="20">
						<?php $x=$row[2];
						$s=array("ANITS","MVGR","GITAM","RAGHU","AVANTHI")?>
						<option><?php echo $row[3]?></option><?php
						for($i=0;$i<5;$i++){ 
							if($s[$i]!=$row[3]){?>
								<option><?php echo $s[$i];}}?></option>	
				</select>
				</div>
					</div>
						</div>

						<center><div class="form-group ">
							<input type="submit" name="edit" value="Update details"/>
						</div></center>
						
					</form>
				</div>
			</div>
		</div>
</body>
</html>