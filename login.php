<?php
session_start();
include("connection.php");

?>
<html>
<head><title>Passenger login</title>
</head>
<body>
<br>
<br>
<center>
<form method="POST" action="#">
<table border="0" height="300" width="500" bgcolor="white">
<tr>
<td><h1 style="color:red" align="center"><u>PASSENGER</u></h1></td><br>
</tr>
<tr>
<td><b>username</b>:&nbsp&nbsp&nbsp<input id="g" type="text" size="25" placeholder="user" name="user"></td>
</tr>
<tr>
<td><b>Password</b>:<input id="h" type="password" size="25" placeholder="password" name="pwd"></td><br>
</tr>
<br>
<br>
<tr>
<td align="center"><input type="submit" name="submit" value="LOGIN" onclick="myfunction()"></td><br>
<br>
</tr>
<tr>
<td align="center"><a href="signup.php">New User Signup</a></td>
</center>
</form>
</table>
<style>
body
{
background-image:url("train.jpg");
}
</style>

</p>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$query = "SELECT * FROM passengers WHERE username='$user' && password='$pwd'";
$sam = mysqli_query($con, $query);
$total= mysqli_num_rows($sam);
if($total==TRUE)
{
$_SESSION['user_name']=$user;
header('location:Trainmain.html');
}
else{
echo '<p>login failed</p>';
}
}
?>