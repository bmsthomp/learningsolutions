<?php 
	session_start();
	// if not authenticated go back to index.php
	if (!$_SESSION['password']){
		session_destroy();
		header("location:index.php");
	}

	require 'head.php';
?>

<!-- Content goes here -->
<div class="nav navbar"></div>
<a href="logout.php">Logout</a>

<?php 
	echo $_SESSION['username'] . " has been authenticated";
?>



<!-- start of footer -->
<?php require 'footer.php' ?>
