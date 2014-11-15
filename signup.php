<?php
	session_start(); 
	require 'head.php'; ?>


<form method='POST' action="signup.php">
	<input name='fname' length='125' type='text' required>
	<input name='lname' length='125' type='text' required>
	<input name='email' length='125' type='email' required>
</form>

<?php require 'footer.php'; ?>