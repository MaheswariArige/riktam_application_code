<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
   <style type="text/css">
   #formdiv{
   width:15%;
   }

   </style>
   <!--<script type="text/javascript">
   function validation(){
		var id=document.getElementById("id").value;
		var name=document.getElementById("studentName").value;
		var email=document.getElementById("studentEmail").value;
		var age=document.getElementById("studentAge").value;
		var address=document.getElementById("studentAddress").value;
		var ck_id=/^[0-9]{3,5}$/;
		var ck_name = /^[A-Za-z ]{3,20}$/;
		var ck_age = /^[0-9]{2}$/;
		var errors = [];
		if (!ck_id.test(id)) {
		  errors[errors.length] = "Please Enter Valid Id .";
		  //alert("pleade enter valid id");  
		 }
		 if (!ck_name.test(name)) {
		  errors[errors.length] = "Please Enter a valid Name ." 
		 }
		 if(!ck_age.test(age)) {
		  errors[errors.length] = "Please Enter Valid Age.";
		 }
		 if(email==""){
		  errors[errors.length] = "Email Should Not Be Null.";
		 }
		 if(address=="") {
		  errors[errors.length] = "Please Enter address.";
		 }
		 if (errors.length > 0) {
		  reportErrors(errors);
		  return false;
		 }
		return true;
	}
	function reportErrors(errors){
	var msg = "Please Enter Valide Data...\n";
		 for (var i = 0; i<errors.length; i++) {
		 var numError = i + 1;
		  msg += "\n" + numError + ". " + errors[i];
		}
		 alert(msg);
	}
   </script>-->
</head>
<body>
<center><h2>Student Registration Form</h2></br></br></center>
		<div class="container" id="formdiv">
			<div class="row main">
				<div class="main-login main-center">
					<form class="" method="post" action="link.php">
					   <div class="form-group">
							<label for="id" class="cols-sm-2 control-label">Registration Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="rollno" required id="rollno" placeholder="Enter your Id"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="studentName" class="cols-sm-2 control-label">Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="name" required id="name" placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="studentEmail" class="cols-sm-2 control-label">Department</label>
							<div class="cols-sm-10">
								<div class="input-group">
<select name="dept" style="width:200px" height="20" class="form-control">
					<option></option>
					<option>CSE</option>
					<option>ECE</option>
					<option>EEE</option>
					<option>MECH</option>
					<option>Civil</option>
					<option>Chemical</option>
				</select>
				</div>
							</div>
						</div>

						<div class="form-group">
							<label for="studentAge" class="cols-sm-2 control-label">College</label>
							<div class="cols-sm-10">
								<div class="input-group">
						<select name="college" style="width:200px" height="20" class="form-control">
					<option></option>
					<option>ANITS</option>
					<option>MVGR</option>
					<option>GITAM</option>
					<option>RAGHU</option>
					<option>AVANTHI</option>
				</select>
								</div>
							</div>
						</div>

						<center><div class="form-group ">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Add student" onclick="return validation();"/>
						</div></center>
						
					</form>
				</div>
			</div>
		</div>
</body>
</html>