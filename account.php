<?php 
	session_start();
	// if not authenticated go back to index.php
	if (!$_SESSION['password']){
		session_destroy();
		header("location:index.php");
	}

	require 'head.php';

	require 'connect.php';

	$tbl_name = "users";

	$usr = $_SESSION['username'];
	$sql = mysql_query("SELECT * FROM $tbl_name WHERE email='$usr';");
	if ($sql) { $row = mysql_fetch_array($sql); } else { $row = false; }

?>

<div class="container">
	<div class="col-lg-12">
		<div class="page-header"><div class="row"><div class="col-lg-12"><h1>Account Management</h1></div></div></div>
		<?php 
			if ($_SESSION['errors']){
				echo "Account could not be updated.";
			} else if ($_SESSION['edit']) {
				echo "Account updated successfully.";
			}

			unset($_SESSION['errors']);
			unset($_SESSION['edit']); 

		?>
			<form method='POST' class="form-horizontal" action="edit.php">
				<div class="input-group account_input">
	  				<span class="input-group-addon account_name">Email</span>
	  				<input required name="email" type="email" class="form-control" value="<?php echo $row[1]; ?>">
				</div>
				<div class="input-group account_input">
	  				<span class="input-group-addon account_name">First Name</span>
	  				<input required name="fname" type="text" class="form-control" value="<?php echo $row[3]; ?>">
				</div>
				<div class="input-group account_input">
	  				<span class="input-group-addon account_name">Last Name</span>
	  				<input required name="lname" type="text" class="form-control" value="<?php echo $row[4]; ?>">
				</div>
				<div class="input-group account_input">
	  				<span class="input-group-addon account_name">Address</span>
	  				<input required name="address" type="address" class="form-control" value="<?php echo $row[5]; ?>">
				</div>
				<div class="input-group account_input">
	  				<span class="input-group-addon account_name">City</span>
	  				<input required name="city" type="text" class="form-control" value="<?php echo $row[7]; ?>">
				</div>
				<div class="input-group account_input">
	  				<span class="input-group-addon account_name">Zip</span>
	  				<input required name="zip" type="text" class="form-control" value="<?php echo $row[8]; ?>">
				</div>
				<div class="input-group account_input">
	  				<span class="input-group-addon account_name">Billing Address</span>
	  				<input required name="baddress" type="address" class="form-control" value="<?php echo $row[6]; ?>">
				</div>
				<input type='submit' >
			</form>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>