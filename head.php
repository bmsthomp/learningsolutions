<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learning Solutions Inc.</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

</head>

<body>
<!-- DB set up --> 
<?php
	// connection vars
	$servername = "localhost";
	$username = "thomp362_ls";
	$password = "fall2014";
	$dbname = "thomp362_learningsolutions";
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
   		die("Connection failed: " . $conn->connect_error);

	} else {
		echo "connected";
	} 
?>