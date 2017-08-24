<html>
<head>
<title>Student Details</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!--<style type="text/css">
		.tablehead,.tablehead:hover{
			background-color:#ccc;
		}
		.pagination a{
			font-size:18x;
		}
		.pagination a {
			font-size:16px;
			float: right;
			padding: 8px 26px;
			text-decoration:;
			transition: background-color .3s;
		}
		.pagination a:hover{
			background-color: #ddd;
		}

		</style>-->
		<script type="text/javascript">
			function deleteRow(id)
			{
				 if(confirm('Sure You Want to delete the record no :'+id))
				 {
					window.location.href='delete.php?id='+id;
				 }
			}
			</script>
		
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

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    if(isset($_GET["page"]))
	{
		$page=$_GET["page"];
	}
	else{$page=1;}
		$number_of_records_per_page=05;
		$start_from=($page-1)*$number_of_records_per_page;
		$view_users_query="select * from details LIMIT $start_from,$number_of_records_per_page";
		$result=mysqli_query($conn,$view_users_query);//here run the sql query.?>
</br></br></br>		
        <center><h2>Student Details</h2></center>
		</br></br>
<table class="table table-stripped table-layout table-hover" align="center" cellpadding="4" style="table-layout:fixed;width:600"cellspacing="3">
    <tr style="background-color:#ccc;" align="center">
				<th width="200" height="20" align="center">Registration Number</th>
				<th width="150" height="20" align="center">Name</th>
				<th width="100" height="20" align="center">Department</th>
				<th width="100" height="20" align="center">College</th>
				<th width="100" height="20" align="center"></th>
				<th width="100" height="20" align="center"></th>
   </tr>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row=mysqli_fetch_array($result)){?>
		<tr align="center">
			<td align="center"><?php echo $row["rollno"]."<br>";?></td>
			<td align="center"><?php echo $row["name"]."<br>";?></td>
			<td align="center"><?php echo $row["department"]."<br>";?></td>
			<td align="center"><?php echo $row["college"]."<br>";?></td>
			<td><a href="ee.php?id=<?php echo $row['rollno'] ?>">edit</a></td>
			<td><a href="javascript:deleteRow(<?php echo $row['rollno']?>)">delete</a></td>
		</tr>
<?php }}?>
		</table>
<center>
<!-- Modal -->
<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Student</button>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student Details</h4>
      </div>
      <div class="modal-body">
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
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Add student"/>
						</div></center>
						
					</form>
				</div>
			</div>
		</div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div>
  </div>
</div>	

</br>
<div><center>
<?php
$sql="select * from details";
$rs_result=mysqli_query($conn,$sql);
$total_records=mysqli_num_rows($rs_result);
$total_pages=ceil($total_records/$number_of_records_per_page);
echo "<a href='x1.php?page=1'>".'<<'.'&nbsp'.'&nbsp'."</a>";
for($i=1;$i<=$total_pages;$i++){
	if($i==$page)	echo "<a page-hover href='x1.php?page=".$i."'>".$i.'&nbsp'.'&nbsp'."</a>";
		else echo "<a href='x1.php?page=".$i."'>".$i.'&nbsp'.'&nbsp'."</a>";
}
	echo "<a href='x1.php?page=$total_pages'>".'>>'."</a>";
?>
</center></div>
</body>
</html>