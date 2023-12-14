<?php

$con = $con = mysqli_connect("localhost","root","","project");

mysqli_select_db($con,"project");

$id = $_REQUEST['id'];
$sql="DELETE FROM ticket WHERE name='$id'";
$records=mysqli_query($con,$sql);
echo('Cancelling...');
header("refresh:3; url=bookedTicketHistory.php");
mysqli_close($con)
?>
