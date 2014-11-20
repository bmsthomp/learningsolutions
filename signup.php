<?php
	session_start(); 
	require 'head.php';?>


<div class="container">

<h1>Create Account</h1>
<form method='POST' class="form-horizontal" action="create.php">
	<fieldset>
	<div class="form-group">
		<div class="col-lg-6">
			<input class="form-control input-sm" name='fname' length='125' type='text' required placeholder="First Name">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-6">
			<input class="form-control input-sm" name='lname' length='125' type='text' required placeholder="Last Name">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-6">
			<input class="form-control input-sm" name='email' length='125' type='email' required placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-6">
			<input class="form-control input-sm" name='address' length='125' type='text' required placeholder="Shipping Address">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-6">
			<input class="form-control input-sm" name='city' length='125' type='text' required placeholder='Shipping City'>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-6">
			<input class="form-control input-sm" name='zip' length='125' type='number' required placeholder='Shipping Zip Code'>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-6">
			<input class="form-control input-sm" name='baddress' length='125' type='text' required placeholder="Billing Address">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-6">
			<input class="form-control input-sm" name='password' length='125' type='password' required placeholder="Password">
		</div>
	</div>
	<input type='submit' >
	</fieldset>
</form>

<?php require 'footer.php'; ?>