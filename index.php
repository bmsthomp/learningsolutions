<?php session_start(); ?>
<?php require 'head.php'; ?>

<!-- Begin site -->
<h1>Learning Solutions Inc.</h1>

<form method="POST" action="login.php">
	<label>
	<input name="username" required length="50" autofocus type="text" placeholder="Enter Email"><br>
	<input name="password" required length="50" type="password" placeholder="Enter Password">
	<input type="submit">
	<em>Not a member? <a href="signup.php">Sign up</a></em>
</form>

<?php 
  
  if (isset($_SESSION['errors'])) {
    foreach($_SESSION['errors'] as $error){ 
    	echo "<p class='alert alert-danger' role='alert'>$error</p>";
    }
  }
?> 

<?php require 'footer.php'; ?>