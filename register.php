<?php
$con = $con = mysqli_connect("localhost","root","","project");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"project");


$sql="INSERT INTO passengers (username,password,Mailid) VALUES 

('$_REQUEST[user]','$_REQUEST[pwd]','$_REQUEST[mailid]')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "User Registered Successfully";
header("refresh:3; url=login.php");

mysqli_close($con)
?>

