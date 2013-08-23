<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)

{
	$mysqli = new mysqli("localhost", "admin", "test123","phpShop");
	if (!$mysqli) {
    	   die('Could not connect: ' . mysql_error());
	   }
	   echo "Connected successfully";
	   mysql_close($mysqli);

	
}

else  

      echo "Error"

?>