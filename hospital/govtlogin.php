<?php

session_start();
?>



<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","gugudigu2") or die(mysql_error());
$db=mysqli_select_db($con,"hms")or die(mysql_error());

$sql="SELECT * FROM govtlogin WHERE username='$username' and password='$password'";

$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);

if($count<1){echo "Wrong Username or Password";}
else
	{
		$_SESSION[user]=$username;
		header("location:govthome.html");
	}

ob_end_flush();
?>
