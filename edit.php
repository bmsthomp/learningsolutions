<?php
	session_start();

	// username and password sent from form 
	$fname=$_POST['fname']; 
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	$baddress=$_POST['baddress'];
	$password=$_POST['password'];

	$usr = $_SESSION['username'];

	require 'connect.php';

	$tbl_name = "users";

	$fname = mysql_real_escape_string(stripslashes($fname));
	$lname = mysql_real_escape_string(stripslashes($lname));
	$email = mysql_real_escape_string(stripslashes($email));
	$address = mysql_real_escape_string(stripslashes($address));
	$city = mysql_real_escape_string(stripcslashes($city));
	$zip = mysql_real_escape_string(stripcslashes($zip));
	$baddress = mysql_real_escape_string(stripslashes($baddress));
	$password = mysql_real_escape_string(stripslashes($password));

	$sql_edit = mysql_query("update $tbl_name set email='$email', firstname='$fname', lastname='$lname', address='$address', b_address='$baddress', city='$city', zip='$zip' where email = '$usr'");

	if($sql_edit){
		$_SESSION['edit'] = "Account updated successfully";
	} else {
		$_SESSION['errors'] = "Account could not be updated";
	}

	header('location:account.php');

?>