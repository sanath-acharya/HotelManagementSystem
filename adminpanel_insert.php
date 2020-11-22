<?php
include_once 'dbConnection.php';

session_start();
if(!(isset($_SESSION['email']))){
	header("location:login.php");
}
	$id = @$_GET['q'];

if($id == '1'){

	$id = $_POST['hid'];
	$name = $_POST['hname'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$street = $_POST['street'];
	$q1=mysqli_query($con,"INSERT INTO hotel VALUES ('$id','$name')");
	$q2=mysqli_query($con,"INSERT INTO location VALUES ('$country','$state','$city','$street','$id',null)");

	header('location:adminpanel.php');
}

if($id == '2'){

	$id = $_POST['hid'];
	$rtype = $_POST['rtype'];
	$no_room = $_POST['no_room'];
	$rcost = $_POST['rcost'];

	$q3=mysqli_query($con,"INSERT INTO rooms (type,number,cost,h_id)VALUES  ('$rtype','$no_room','$rcost','$id')") or die('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');

	header("location:adminpanel.php");
}

if($id == '3'){

	$id = $_POST['hid'];
	$fid = $_POST['fid'];
	$fname = $_POST['fname'];
	$rcost = $_POST['rcost'];

	$q3=mysqli_query($con,"INSERT INTO facilities VALUES  ('$fid','$fname','$id')") or die('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');

	header("location:adminpanel.php");
}
if($id == '4'){

	$id = $_POST['hid'];
	$sid = $_POST['sid'];
	$name = $_POST['sname'];
	$salary = $_POST['salary'];
	$desig = $_POST['desig'];

	$q3=mysqli_query($con,"INSERT INTO staff VALUES  ('$sid','$name','$salary','$desig','$id')") or die('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');
	echo '<script type="text/javascript">alert("Successfully Updated..!!!");</script>';
	header("location:adminpanel.php");
}
if($id == '5'){

	$email = $_POST['user'];
	

	$q3=mysqli_query($con,"DELETE FROM users where email='$email'") or die('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');
	header("location:viewdetails.php");
}
?>