<?php
	include('dbConnection.php');
	session_start();
if(!(isset($_SESSION['email']))){
	header("location:login.php");
}
	$id = @$_GET['id'];

	$sql=mysqli_query($con,"Select name from hotel where h_id='$id'");
	$sql1=mysqli_query($con,"Select type,cost,number from rooms where h_id='$id'");				
	$sql2=mysqli_query($con,"Select name,salary,designation from staff where h_id='$id'");
	$sql3=mysqli_query($con,"Select Fname from facilities where h_id='$id'");
	$sql4=mysqli_query($con,"Select * from location where h_id='$id'");							

?>
<!DOCTYPE html>
<html>
<head>
	<title>HMS-Home Page</title>
	<link rel="stylesheet" href="res/css/style1.css">
	<link rel="stylesheet" href="res/css/drop.css">
</head>
<body>
	<div class="side">
	</div>
	<div class="wrap">
	<div class="content">
		<div class="header">
			<h1>Hotel Management System</h1>
		</div>
			<ul >
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="hoteldetails.php">Search Hotel</a></li>
		        <li><a href="contactus.php">Contact Us</a></li>
		        <div class="dropdown">
  					<li><a href="#">Profile</a></li>
  					<div class="dropdown-content">
  						<a href="profile.php">Profile Details</a>
  						<a href="logout.php">Log Out</a>
  					</div>
				</div>
		    </ul>
			<div class="content center"><h2>More Details About <span><?php 
							while($row = mysqli_fetch_array($sql)) {           
			                  $name = $row['name'];
			                  echo $name;
			              }
							?></span></h2>
				<center><table width="400" >
					<tr>
						<td>Location Details</td>
						<td>
						    <table><?php $count=mysqli_num_rows($sql4);
							if($count>=1){
							while($row = mysqli_fetch_array($sql4)) {
			                  $country = $row['country'];
			                  $state = $row['state'];
			                  $city = $row['city'];
			                  $street = $row['street'];
			              
						    echo '<tr><td>Country : '.$country.'</td></tr>
						    <tr><td> State : '.$state.'</td></tr>
						    <tr><td> City : '.$city.'</td></tr>
						    <tr><td> Street : '.$street.' <br></td></tr>';
						}
			          }?></table><br>
						</td>
					</tr>
					<tr>
						<td>Room Details</td>
						<td>
						    <table><?php
						    	while($row = mysqli_fetch_array($sql1)) {
			                  $type = $row['type'];
			                  $cost = $row['cost'];
			                  $num = $row['number'];
						    echo '<tr><td>Room Type : '.$type.'</td></tr>
						    <tr><td>Cost per Room : '.$cost.'</td></tr>
						    <tr><td>Number of Room : '.$num.'></td></tr>';
						    } ?></table>
						</td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td>Staff Details</td>
						<td>
						    <table><?php $count=mysqli_num_rows($sql2);
							if($count>= 1){
							while($row = mysqli_fetch_array($sql2)) {
			                  $sname = $row['name'];
			                  $salary = $row['salary'];
			                  $desig = $row['designation'];
						    echo '<tr><td>Staff Name : '.$sname.'</td></tr>
						    <tr><td> Salary : '.$salary.'</td></tr>
						    <tr><td> Designation : '.$desig.' <br><br></td></tr>';
						}
			          }?></table><br>
						</td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td>Facilities </td>
						<td>
						    <table><?php $count=mysqli_num_rows($sql3);
							if($count>=1){
							while($row = mysqli_fetch_array($sql3)) {
			                  $Fname = $row['Fname'];
			              
						    echo '<tr><td>'.$Fname.'</td></tr>
						    <tr><td><br></td></tr>';
						}
			          }?></table><br>
						</td>
					</tr>
				</table></center>
			</div> 
	    <div class=" content footer">
	    	 <p>Copyright &copy; HMS</p>
	    </div>
	</div>
	</div>
		<div class="side">	
	</div>
</body>
</html>