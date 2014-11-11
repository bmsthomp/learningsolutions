<html>
<head>
</head>

<body>
<?php

	$servername = "localhost";
	$username = "thomp362_ls";
	$password = "fall2014";
	$dbname = "thomp362_learningsolutions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

	<?php 

		$query = "select * from users;";
		$x= $conn->query($query);
		
		echo $x;
		// this is a comment 
	?>

</body>
</html>