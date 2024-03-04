<?php
$servername = "intweb.bucks.ac.uk";
$username = "username";
$password = "password";


	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = "SELECT * from test";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]’)";
	
		
	// Connect to server
	
	mysql> USE test
	
	$test = new mysqli($servername, $username, $password, $dbname);
	// Check connection
if ($test->connect_error) {
    die("Connection failed: " . $test->connect_error);
} 

	while ($row = mysql_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
?>
