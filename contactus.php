<?php
include('dbConnection.php');
session_start();
if(!(isset($_SESSION['email']))){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HMS-Contact Us</title>
	<link rel="stylesheet" href="res/css/style1.css">
	<link rel="stylesheet" href="res/css/drop.css">
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
		
		    <div id="content">
        <center><h1>Contact Us</h1><br></center>
        <form action="feedback.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="username" value="" /></p>
            <p><span>Phone Number</span><input class="contact" type="text" name="phno" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="40" name="msg"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
        </form>
      </div>   
	    
	    <div class="content footer">
	    	 <p>Copyright &copy; HMS.</p>
	    </div>
	</div>
	</div>
	<div class="side">
		
	</div>
</body>
</html>