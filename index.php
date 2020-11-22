<?php
include('dbConnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>HMS-Home Page</title>
	<link rel="stylesheet" href="res/css/style1.css">
	<link rel="stylesheet" href="res/css/drop.css">
<style type "text/css">

.blink {
	-webkit-animation: blink .75s linear infinite;
	-moz-animation: blink .75s linear infinite;
	-ms-animation: blink .75s linear infinite;
	-o-animation: blink .75s linear infinite;
	 animation: blink .75s linear infinite;
}
@-webkit-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}

</style>
</head>
<body>
	<div class="side">

	</div>
	<div class="wrap">
	<div class="content">
		<div class="header">
			<p><h1>Hotel Management System</h1></p>
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
		
		    <p><?php 
					session_start();
					  if(!(isset($_SESSION['email']))){
					header("location:login.php");
					}
					else
					{
					$email=$_SESSION['name'];
					echo '<center><h1><div class="blink">Welcome </div><span>'.$email.'</span></h1></center>';
				}?>
			</p>
			<center><img src="res/images/home.jpg" width="700" height="450"></center>
	    <div class="content footer">
	    	 <p>Copyright &copy; HMS</p>
	    </div>
	</div>
	</div>
	<div class="side">
		
	</div>
</body>
</html>