<?php
	session_start(); 
	require 'head.php'; ?>

<h1>Enter your information</h1>
<form method='POST' action="signup.php">
	<input name='fname' length='125' type='text' required placeholder="First Name"><br>
	<input name='lname' length='125' type='text' required placeholder="Last Name"><br>
	<input name='email' length='125' type='email' required placeholder="Email"><br>
	<input name='address' length='125' type='text' required placeholder="Shipping Address"><br>
	<input name='baddress' length='125' type='text' required placeholder="Billing Address"><br>
	<input name='password' length='125' type='password' required placeholder="Password">
</form>

<?php require 'footer.php'; ?>