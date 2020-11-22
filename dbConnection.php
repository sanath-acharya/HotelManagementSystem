<?php
/*

$con= new mysqli('localhost','root','')or die("Could not connect to mysql".mysqli_error($con));
mysqli_select_db($con,"hms")  or die("Could connect to Database");


if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

//from dbchanges
//from db1 branch

*/

$con=mysqli_connect("localhost",'root','',"hms",3307);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>