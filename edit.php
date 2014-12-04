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

	// db connection
	$host="localhost"; // Host name 
	$username="thomp362_ls"; // Mysql username 
	$password="fall2014"; // Mysql password
	$db_name="thomp362_learningsolutions"; // Database name 
	$tbl_name="users"; // Table name 

	// Connect to server and select database
	mysql_connect("$host", "$username", "$password")or die("cannot connect: " . mysqli_connect_error()); 
	mysql_select_db("$db_name")or die("cannot select DB");

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