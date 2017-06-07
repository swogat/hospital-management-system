<?php
session_start()
?>

<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","gugudigu2") or die(mysqli_error($con));
$db=mysqli_select_db($con,"hms")or die(mysqli_error($con));
$str="insert into prescription values('$id','$hospital','$name','$age','$gender','$occupation','$mobile','$address','$medicine','$diagnosis','$instructions','$doc_name')";
$res=mysqli_query($con,$str)or die(mysqli_error($con));
if($res>=0)
{
echo'<br><br><b>Patient added !!<br>';
}

?>
<html>
<body>
<br>
<a href="home1.html"><b>Click here to return to the home page</b></a>
</body></html>
