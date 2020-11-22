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
		
		    <?php  
          $email = $_SESSION['email'];
        {
         $result = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' ") or die('Error');
         $count=mysqli_num_rows($result);
        echo  '<center><br><br><table style="width:100%;"><tr><th><b> </b></th><th></th>';
        if($count==1)
        {
       while($row = mysqli_fetch_array($result)) {
         $name = $row['name'];
          $contact = $row['email'];
          $contact = $row['contact'];
          echo '<tr><td>Name :</td><td>'.$name.'</td></tr>
                <tr><td>E-Mail :</td><td>'.$email.'</td></tr>
                <tr><td>Phone :</td><td>'.$contact.'<br><br></td></tr></tr>';
      }
    }
      echo '</table></center>';

      }?>
			
	    <div class="content footer">
	    	 <p>Copyright &copy; HMS</p>
	    </div>
	</div>
	</div>
	<div class="side">
		
	</div>
</body>
</html>