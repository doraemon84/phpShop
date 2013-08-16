<?php

$username = S_POST['username'];
$password = $_POST['password'];

if ($username&&password)

{
	$connect = mysql_connect("localhost",admin,"test123") or die ("Couldn't connect to the database!");
	mysql_select_db("phpShop") or die("Couldnt find database");	
}

else 
	die("Please enter a username and a password");

?>