<?php
session_start();
if(isset($_SESSION['email'])){
session_destroy();
}
include_once 'dbConnection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($con,"select * from users where email = '$email' and password = '$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	while($row = mysqli_fetch_array($result))
	{
		$email = $row['email'];
		$name = $row['name'];
	}
	$_SESSION['email'] = $email;
	$_SESSION['name'] = strtoupper($name);
	header("location:index.php");
}
else if($password == 'admin' && $email == 'admin')
{
	$_SESSION['email'] = $email;
	header("location:adminpanel.php");
}
else
{
	header("location:login.php");
}
?>
