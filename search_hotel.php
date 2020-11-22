<?php
	include('dbConnection.php');
	session_start();
if(!(isset($_SESSION['email']))){
	header("location:login.php");
}

	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	
	$sql=mysqli_query($con,"Select h_id,name from hotel where h_id in(SELECT h_id FROM location WHERE country='$country' and state='$state' and city='$city')");
	$count=mysqli_num_rows($sql);
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
			<center><p><h1>Hotel Details </h1></p></center>
			<center><form action="search_hotel.php" method="get">
	    	<table  width = "400" height = "">
	    		 <?php
      			$c=1;
      			if($count>0){
                  while($row = mysqli_fetch_array($sql)) {
                  $id = $row['h_id'];           
                  $name = $row['name'];
      			
                  echo '<tr><td><img src="res/images/img'.$c++.'.jpg" width="150" height="150"></td>
                  		<td><br><h3>Hotel Name :'.$name.'</h3><br><center><a href="moreDetails.php?id='.$id.'">More Details</a></center></td></tr>';

					/*$sql1=mysqli_query($con,"Select type,cost,number from rooms where h_id='$id'");
                  		while($row1 = mysqli_fetch_array($sql1)) {
                  	$type = $row1['type'];  
					$cost = $row1['cost'];  
					echo'<br>Room Type :'.$type.'<br>Cost per Room :'.$cost.'</h3><br><center><a href="moreDetails.php?id='.$id.'">More Details</a></center></td></tr>';
            	}*/
              }
              }
              else
              {
              	echo '</center><h1>"No Results Found...!!!"</h1></center>';
              }

                ?>
         </table></center><br><br></form>
	    <div class="content footer">
	    	 <p>Copyright &copy; HMS.</p>
	    </div>
	</div>
	</div>
	<div class="side">
		
	</div>
</body>
</html>