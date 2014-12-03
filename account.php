<?php 
	session_start();
	// if not authenticated go back to index.php
	if (!$_SESSION['password']){
		session_destroy();
		header("location:index.php");
	}

	require 'head.php';

	// content table query
	$host="localhost"; // Host name 
	$username="thomp362_ls"; // Mysql username 
	$password="fall2014"; // Mysql password
	$db_name="thomp362_learningsolutions"; // Database name 
	$tbl_name="users"; // Table name 

	mysql_connect("$host", "$username", "$password")or die("cannot connect: " . mysqli_connect_error()); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$usr = $_SESSION['username'];
	$sql = mysql_query("SELECT * FROM $tbl_name WHERE email=$usr");

?>

<div class="container">
	<div class="col-lg-12">
		<div class="page-header"><div class="row"><div class="col-lg-12"><h1>Account Management</h1></div></div></div>

		</div>
	</div>
</div>

<?php require 'footer.php'; ?>