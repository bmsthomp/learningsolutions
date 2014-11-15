<?php 
	session_start();
	// if not authenticated go back to index.php
	if (!$_SESSION['username']){
		header("location:index.php");
	}

	require 'head.php';
	// this will probably need to be a different header file .. idk yet though
?>

<!-- Content goes here -->

<a href="logout.php">Logout</a>

<?php 
	echo $_SESSION['username'] . " has been authenticated";
?>



<!-- start of footer -->
<?php require 'footer.php' ?>
