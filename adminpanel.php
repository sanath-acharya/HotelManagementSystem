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
			<?php 
					if(!(isset($_SESSION['email']))){
						header("location:login.php");
					}
					else
					{
						$email=$_SESSION['email'];
						echo '<p><h1>Hotel Management System  <span>"'.$email.'"</span> Panel</h1></p>';
			}?>
		</div>
		<ul>
			<li><a class="active" href="adminpanel.php">Add Hotels</a></li>
			<li><a href="viewdetails.php">View All Details</a></li>
		       <li><a href="logout.php">Log Out</a></li>
		</ul>
        </div><br><br>

		<div class="col-lg-13">
           <!--Pill Tabs   -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><h4>Add Here Complete Details About Hotel</h4></center>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#home-pills" data-toggle="tab">Add Hotel</a></li>
                        <li><a href="#profile-pills" data-toggle="tab">Add Room Details</a></li>
                        <li><a href="#messages-pills" data-toggle="tab">Add Facility</a></li>
                        <li><a href="#settings-pills" data-toggle="tab">Add Staffs</a></li>
                    </ul>

                    <div class="tab-content">
                       	<div class="tab-pane fade in active" id="home-pills">
                            <h4></h4>
                            <p>
                                <form action="adminpanel_insert.php?q=1" method="post">
                                    <div class="form_settings">
                                        <p><span>Hotel ID</span><input class="contact" type="text" name="hid" value="" /></p>
                                        <p><span>Hotel Name</span><input class="contact" type="text" name="hname" value="" /></p>
                                       	<p><span>Country</span><input class="contact" type="text" name="country" value="" /></p>
                                        <p><span>State</span><input class="contact" type="text" name="state" value="" /></p>
                                        <p><span>City</span><input class="contact" type="text" name="city" value="" /></p>
                                        <p><span>Street</span><input class="contact" type="text" name="street" value="" /></p>
                                        <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
                                    </div>
                                </form>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile-pills">
                            <h4></h4>
                           	<p>
                                        <form action="adminpanel_insert.php?q=2" method="post">
                                            <div class="form_settings">
                                            	<p><span>Select The Hotel :</span>
				    			<select required="required" name="hid"><option value="">----SELECT----</option>
					                <?php
					                  $result1 = mysqli_query($con,"SELECT h_id,name FROM Hotel ") or die('Error');
					                  while($row = mysqli_fetch_array($result1)) {
					                  $id = $row['h_id'];
                                      $name = $row['name'];           
					                  echo '<option value='.$id.'>'.$id.'-'.$name.'</option>';
					                  }
					                ?>
			              		</select>
			              	</p>
                                               <!-- <p><span>Room Number</span><input class="contact" type="text" name="rno" value="" /></p>-->
                                                <p><span>Room Type</span><input class="contact" type="text" name="rtype" value="" /></p>
                                                <p><span>Number of Rooms</span><input class="contact" type="text" name="no_room" value="" /></p>
                                                <p><span>Cost per Room</span><input class="contact" type="text" name="rcost" value="" /></p>
                                                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
                                              </div>
                                        </form>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4></h4>
                                    <p>
                                        <form action="adminpanel_insert.php?q=3" method="post">
                                            <div class="form_settings">
                                            	<p><span>Select The Hotel :</span>
				    			<select required="required" name="hid"><option value="">----SELECT----</option>
					                <?php
					                  $result2 = mysqli_query($con,"SELECT h_id,name FROM Hotel ") or die('Error');
					                  while($row = mysqli_fetch_array($result2)) {
					                  $id = $row['h_id'];
                                      $name = $row['name'];           
                                      echo '<option value='.$id.'>'.$id.'-'.$name.'</option>';
					                  }
					                ?>
			              		</select>
			              	</p>
                                                <p><span>Facility ID</span><input class="contact" type="text" name="fid" value="" /></p>
                                                <p><span>Facility Name</span><input class="contact" type="text" name="fname" value="" /></p>
                                                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
                                              </div>
                                        </form>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <h4></h4>
                                    <p>
                                        <form action="adminpanel_insert.php?q=4" method="post">
                                            <div class="form_settings">
                                            	<p><span>Select The Hotel :</span>
				    			<select required="required" name="hid"><option value="">----SELECT----</option>
					                <?php
					                  $result3 = mysqli_query($con,"SELECT h_id,name FROM Hotel ") or die('Error');
                                      while($row = mysqli_fetch_array($result3)) {
                                      $id = $row['h_id'];
                                      $name = $row['name'];           
                                      echo '<option value='.$id.'>'.$id.'-'.$name.'</option>';
					                  }
					                ?>
			              		</select>
			              	</p>
                                                <p><span>Staff ID</span><input class="contact" type="text" name="sid" value="" /></p>
                                                <p><span>Staff Name</span><input class="contact" type="text" name="sname" value="" /></p>
                                                <p><span>Salary</span><input class="contact" type="text" name="salary" value="" /></p>
                                                <p><span>Designation</span><input class="contact" type="text" name="desig" value="" /></p>
                                                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
                                              </div>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--End Pill Tabs   -->
                </div>

	    <div class="content footer">
	    	 <p>Copyright &copy; HMS</p>
	    </div><br><br>
	</div>
	</div>
	<div class="side">
	</div>
	<script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
</body>
</html>