<?php
	session_start(); 
	require 'head.php'; ?>

<h1>Enter your information</h1>
<form method='POST' action="signup.php">
	<input name='fname' length='125' type='text' required placeholder="First Name"><br>
	<input name='lname' length='125' type='text' required placeholder="Last Name"><br>
	<input name='email' length='125' type='email' required placeholder="Email"><br>
	<input name='address' length='125' type='text' required placeholder="Shipping Address"><br>
	<input name='city' length='125' type='text' required placeholder='Shipping City'><br>
	<input name='zip' length='125' type='number' required placeholder='Shipping Zip Code'><br>
	<input name='baddress' length='125' type='text' required placeholder="Billing Address"><br>
	<input name='password' length='125' type='password' required placeholder="Password">
	<input type='submit' >
</form>

<?php
	
 /* if (isset($_SESSION['errors'])) {
    foreach($_SESSION['errors'] as $error){ 
    	echo "<p class='alert alert-danger' role='alert'>$error</p>";
    }
  }*/

	$host="localhost"; // Host name 
	$username="thomp362_ls"; // Mysql username 
	$password="fall2014"; // Mysql password
	$db_name="thomp362_learningsolutions"; // Database name 
	$tbl_name="users"; // Table name 

	// Connect to server and select database.
	mysql_connect("$host", "$username", "$password")or die("cannot connect: " . mysqli_connect_error()); 
	mysql_select_db("$db_name")or die("cannot select DB");

	// username and password sent from form 
	$fname=$_POST['fname']; 
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	$baddress=$_POST['baddress'];
	$password=$_POST['password'];

	$fname = mysql_real_escape_string(stripslashes($fname));
	$lname = mysql_real_escape_string(stripslashes($lname));
	$email = mysql_real_escape_string(stripslashes($email));
	$address = mysql_real_escape_string(stripslashes($address));
	$city = mysql_real_escape_string(stripcslashes($city));
	$zip = mysql_real_escape_string(stripcslashes($zip));
	$baddress = mysql_real_escape_string(stripslashes($baddress));
	$password = mysql_real_escape_string(stripslashes($password));

	$sql = "INSERT INTO users (firstname, lastname, email, address, city, zip, b_address, pw) VALUES ('$fname', '$lname', '$email', '$address', '$city', '$zip', '$baddress', MD5('$password'));";
	//$result = mysql_query($sql);

	$result = mysql_query($sql) or die(mysql_error());

/*
	if (!$result){
		$_SESSION['errors'] = array("Could not create account.");
	} else {
		$_SESSION['username'] = $email;
		$_SESSION['password'] = $password;
		header('location:content.php');
	}
	*/
?>


<?php require 'footer.php'; ?>