<?php
	session_start();

	$host="localhost"; // Host name 
	$username="thomp362_ls"; // Mysql username 
	$password="fall2014"; // Mysql password
	$db_name="thomp362_learningsolutions"; // Database name 
	$tbl_name="users"; // Table name 

	// Connect to server and select database.
	mysql_connect("$host", "$username", "$password")or die("cannot connect: " . mysqli_connect_error()); 
	mysql_select_db("$db_name")or die("cannot select DB");

	// username and password sent from form 
	$myusername=$_POST['username']; 
	$mypassword=$_POST['password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$usr = stripslashes($myusername);
	$pwd = stripslashes($mypassword);
	$usr = mysql_real_escape_string($myusername);
	$pwd = mysql_real_escape_string($mypassword);
	$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and pw=md5('$mypassword')";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		session_register("$myusername");
		session_register("$mypassword"); 
		header("location:content.php");
	} else {
		$_SESSION['errors'] = array("Wrong Username or Password");
		header("location:index.php");
	}

?>