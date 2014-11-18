<?php 
	session_start();
	require 'head.php'; ?>

<!-- Begin site -->
<h1>Learning Solutions Inc.</h1>

<form method="POST" action="login.php">
	<label>
	<input name="username" required length="50" autofocus type="email" placeholder="Enter Email"><br>
	<input name="password" required length="50" type="password" placeholder="Enter Password"><br>
	<input type="submit" value="Proceed">
	<em>Not a member? <a href="signup.php">Sign up</a></em>
</form>
<br>

<?php 
  
  if (isset($_SESSION['errors'])) {
    foreach($_SESSION['errors'] as $error){ 
    	echo "<p class='alert alert-danger' role='alert'>$error</p>";
    }
  }
?> 

<?php require 'footer.php'; ?>