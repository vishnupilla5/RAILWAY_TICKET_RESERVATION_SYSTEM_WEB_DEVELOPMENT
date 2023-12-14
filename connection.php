<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$con=mysqli_connect($servername,$username,$password,$dbname);

if($con){
echo "";
}
else
{
die("connection failed because".mysqli_connect_error());
}
?>