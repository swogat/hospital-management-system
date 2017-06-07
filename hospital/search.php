<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "gugudigu2","hms");
    
    // mysql search query
    $query = "SELECT * from prescription WHERE `id`=$id LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
		echo
		"PATIENT ID :{$row['id']}  <br> ".
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
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
        
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}



?>
<!DOCTYPE html>

<html>

    <head>

        <title> Search </title>

        <meta charset="UTF-8"> 

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

    <form style="  font-family:ariel;" action="search.php" method="post">

        ID:<input type="text" name="id"><br><br>
        

        <input type="submit" name="search" value="Find">

           </form>

    </body>

</html>
