<?php
$con = $con = mysqli_connect("localhost","root","","project");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db($con,"project");
$sql = "INSERT INTO ticket VALUES ('$_POST[name]','$_POST[age]','$_POST[departure]','$_POST[destination]','$_POST[coach]','$_POST[date]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Ticket Booking........";
$id=$_POST['name'];
$url = "ticket.php?id=$id";
header("refresh:3; url=$url");
mysqli_close($con)
?>