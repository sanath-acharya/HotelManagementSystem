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
	<link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
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
			<div class="content center">
                    <form action="search_hotel.php" method="post">
                       <div class="form_settings">
                            <p><span>Select The COUNTRY :</span>
				    			<select required="required" id="ccountry" name="country"><option value="">---SELECT---</option>
					                <?php
					                  $result1 = mysqli_query($con,"SELECT distinct country FROM location ") or die('Error');
					                  while($row = mysqli_fetch_array($result1)) {
					                  $country = $row['country'];           
					                  echo '<option width="100" value='.$country.'>'.$country.'</option>';
					                  }
					                ?>
			              		</select>
			              	</p>
			              	<p><span>Select The STATE :</span>
				    			<select required="required" id="sstate" name="state"><option value="">---SELECT---</option>
					                <?php
					                  $result2 = mysqli_query($con,"SELECT distinct state FROM location  ") or die('Error');
					                  while($row1 = mysqli_fetch_array($result2)) {
					                  $state = $row1['state'];           
					                  echo '<option value='.$state.'>'.$state.'</option>';
					                  }
					                ?>
			              		</select>
			              	</p>
			              	<p><span>Select The CITY :</span>
				    			<select required="required" id="ccity" name="city"><option value="">---SELECT---</option>
					                <?php
					                  $result3 = mysqli_query($con,"SELECT distinct city FROM location ") or die('Error');
					                  while($row2 = mysqli_fetch_array($result3)) {
					                  $city = $row2['city'];           
					                  echo '<option value='.$city.'>'.$city.'</option>';
					                  }
					                ?>
			              		</select>
			              	</p><br>
			              	<p>
								<input class="submit" type="submit" value="Search  Hotel" >
							</p><br>
                        </div>
                    </form>
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