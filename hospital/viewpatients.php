<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'gugudigu2';
$con = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $con )
{
  die('Could not connect: ' . mysqli_error($con));
}
$sql = 'SELECT * from prescription';

mysqli_select_db($con,'hms');
$retval = mysqli_query($con,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysqli_error($con));
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    echo "PATIENT ID :{$row['id']}  <br> ".
		"HOSPITAL	 : {$row['hospital']} <br> ".
         "NAME 		 : {$row['name']} <br> ".
         "AGE		 : {$row['age']} <br> ".
         "GENDER	 : {$row['gender']} <br> ".
         "OCCUPATION : {$row['occupation']} <br> ".
         "MOBILE	 : {$row['mobile']} <br> ".
         "ADDRESS	 : {$row['address']} <br> ".
		 "MEDICINE	 : {$row['medicine']} <br> ".
         "DIAGNOSIS : {$row['diagnosis']} <br> ".
         "INSTRUCTIONS : {$row['instructions']} <br> ".
         "DOCTOR NAME	 : {$row['doc_name']} <br> ".	
         "--------------------------------<br>";
} 

mysqli_close($con);
?>
