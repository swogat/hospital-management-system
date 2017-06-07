<?php
$servername = "localhost";
$username = "root";
$password = "gugudigu2";
$user=$_POST['username'];
$pass=$_POST["password"];

$con = mysqli_connect("localhost","root","gugudigu2","alumini");
$query="insert into login values('$user','$pass')";
$result=mysqli_query($con,$query) or die("Error executing query ".mysqli_error($con));
if($result>=0)
{
echo'<br><br><b>Thank you for registeration !! <br>';
}

?>
<html>
<br>
<a href="index.html"><b>Click here to return to the main page</b></a>
</html>