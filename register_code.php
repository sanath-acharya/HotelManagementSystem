<?php
include_once 'dbConnection.php';

$name = $_POST['name'];
$phone = $_POST['phonenumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$password1 = $_POST['confirm_password'];
	
	if(($password==$password1))
	{
		$q3=mysqli_query($con,"INSERT INTO users VALUES  ('$name','$email','$phone','$password')");
		session_start();
		$_SESSION['email'] = $email;
		header("location:login.php");
	}else
	{
		echo '<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>';
	}
?>