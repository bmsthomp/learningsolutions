<?php

	$host="localhost"; // Host name 
	$username="thomp362_ls"; // Mysql username 
	$password="fall2014"; // Mysql password
	$db_name="thomp362_learningsolutions"; // Database name 

	mysql_connect("$host", "$username", "$password")or die("cannot connect: " . mysqli_connect_error()); 
	mysql_select_db("$db_name")or die("cannot select DB");

?>