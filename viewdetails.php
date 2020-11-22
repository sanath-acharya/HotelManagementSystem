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
						echo '<p><h1>Hotel Management System <span>"'.$email.'"</span> Panel</h1></p>';
			}?>
		</div>
		<ul >
			<li><a class="active" href="adminpanel.php">Add Hotels</a></li>
			<li><a href="viewdetails.php">View All Details</a></li>
		       <li><a href="logout.php">Log Out</a></li>
		</ul>
	</div>
	</div><br><br>

	<div class="wrap col-lg-13">
		<div class="panel panel-default">
            <div class="panel-heading">
            	<center><h4>User Details</h4></center>
            </div>
            <div class="panel-body">	

            	<div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive ">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Name</th>
                                            <th>E-Mail</th>
                                            <th>Contact Number</th>
                                        </tr>
                                    </thead>
                                    <tbody><?php
                                    	$result1 = mysqli_query($con,"SELECT * FROM users ") or die('Error');
                                    	$c=1;
					                  while($row = mysqli_fetch_array($result1)) {
					                  	$id = $row['email'];
                                      	$name = $row['name'];
                                      	$phone = $row['contact'];           
                                        echo '<tr>
                                            <td>'.$c++.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$phone.'</td>
                                        </tr>';
                                    }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                	<form action="adminpanel_insert.php?q=5" method="post">
                	<label>Select User to Remove :</label><br><select required="required" name="user"><option value="">----SELECT----</option>
					                <?php
					                  $result1 = mysqli_query($con,"SELECT * FROM users ") or die('Error');
					                  while($row = mysqli_fetch_array($result1)) {
					                  $id = $row['email'];
                                      $name = $row['name'];           
					                  echo '<option value='.$id.'>'.$name.'</option>';
					                  }
					                ?>
			              		</select>
			              		<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Remove User" /></p>
			         </form>
                </div>

            </div>
        </div>
	</div>

	<div class="wrap">
	    <div class="content footer">
	    	 <p>Copyright &copy; HMS</p>
	    </div>
	</div>

	<div class="side">
		
	</div>
	<script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
</body>
</html>