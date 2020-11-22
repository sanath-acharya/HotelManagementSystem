<?php 
include_once 'dbConnection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$phno = $_POST['phno'];

//$q3=mysqli_query($con,"INSERT INTO feedback VALUES  ('$username','$phno','$email','$msg')") or die ("Error");
echo 'Feedback is Sent Successfully';
header("location:contactus.php");
 ?>
