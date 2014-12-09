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

	// if there is no value for any input return to signup.php
	if ($fname and $lname and $email and $address and $city and $zip and $baddress and $password){

		require 'connect.php';

		$fname = mysql_real_escape_string(stripslashes($fname));
		$lname = mysql_real_escape_string(stripslashes($lname));
		$email = mysql_real_escape_string(stripslashes($email));
		$address = mysql_real_escape_string(stripslashes($address));
		$city = mysql_real_escape_string(stripcslashes($city));
		$zip = mysql_real_escape_string(stripcslashes($zip));
		$baddress = mysql_real_escape_string(stripslashes($baddress));
		$password = mysql_real_escape_string(stripslashes($password));

		$sql_check = mysql_query("SELECT email FROM users WHERE email = '$email';");
		$sql_check = mysql_num_rows($sql_check);
		if ($sql_check==0){ 

			$sql = "INSERT INTO users (firstname, lastname, email, address, city, zip, b_address, pw) VALUES ('$fname', '$lname', '$email', '$address', '$city', '$zip', '$baddress', MD5('$password'));";
			$result = mysql_query($sql);

			if (!$result){
				$_SESSION['errors'] = array("Could not create account.");
				header('location:signup.php');

			} else {
				$_SESSION['username'] = $email;
				$_SESSION['password'] = $password;
				header('location:content.php');
			}
		} else {
			$_SESSION['errors'] = array("There is already an account associated with this email.");
			header('location:signup.php');
		}

	} else {header('location:signup.php');}
	
?>