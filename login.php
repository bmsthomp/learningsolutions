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
	$usr = mysql_real_escape_string(stripslashes($myusername));
	$pwd = mysql_real_escape_string(stripslashes($mypassword));

	$sql="SELECT * FROM $tbl_name WHERE email='$usr' and pw=md5('$pwd')";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		$_SESSION['username'] = $usr;
		$_SESSION['password'] = $pwd;
		$_SESSION['errors'] = false;
		header("location:content.php");
	} else {
		$_SESSION['username'] = $usr;
		$_SESSION['errors'] = array("Wrong Username or Password");
		header("location:index.php");
	}

?>