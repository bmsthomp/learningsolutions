<?php session_start(); 
	require 'head.php'; 

	//check for failed log in
	if (isset($_SESSION['errors'])) {
		$error = true; 
	}
?> 

<div class="jumbotron">
	<div class="container">
		<div class="col-lg-8">
			<h1>Learning Solutions Inc.</h1>
			<p>teaching kids to be awesome</p>
		</div>
		<div class="col-lg-4">
			<!-- Login Form -->
			<?php
				if (!isset($_SESSION['password'])){ ?>

			<form class="form-horizontal" method="POST" action="login.php">
				<fieldset>
					<div class="form-group <?php if($error){ echo "has-error"; }?>">
						<div class="col-lg-12">
							<input class="form-control input-sm" name="username" required length="50" autofocus type="email" placeholder="Enter Email" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];}?>">
						</div>
					</div>
					<div class="form-group <?php if($error){ echo "has-error"; }?>">
						<div class="col-lg-12">
							<input class="form-control input-sm" name="password" required length="50" type="password" placeholder="Enter Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-2">
							<button name="submit" class="btn btn-default btn-sm" type="submit">Log In</button>
						</div>
						<div class="col-lg-10">
							<em>Not a member? <a href="signup.php">Sign up</a></em>
						</div>						
					</div>
				</fieldset>
			</form>
			<?php
				} 
			?>
		</div>
	</div>
</div>
<div class="container">
	<div class="col-lg-12">
		<div class="page-header"><div class="row"><div class="col-lg-12"><h1>Welcome</h1></div></div></div>
		<p>
		Welcome to learningsolutions.com! Please log in on the upper right side of the screen to view your dashboard, view, rent, and download our educational media . 
		If you need to contact us, look to the bottom of this page for contact information.  Thank you and have a great day!
		</p>
	</div>
</div>
<div class="container">
	<div class="col-lg-12">
		<div class="page-header"><div class="row"><div class="col-lg-12"><h1>About Us</h1></div></div></div>
		<p>
		Established in 1988 with humble beginnings as a family business in Milwaukee, WI, we are one of the worldwide leaders in providing  educational books and video games to children and educational services. 
		As well as shipping the products to our customers, we now provide monthly plans that allow them download the directly to their computer. 
		Customers are our #1 priority, and we are routinely ranked in the top 10 in customer service year after year. 
		</p>
	</div>
</div>
<div class="container">
	<div class="col-lg-12">
		<div class="page-header"><div class="row"><div class="col-lg-12"><h1>Contact us </h1></div></div></div>
		<p>Our support staff is standing by 8am to 6pm CST Monday through Friday:</p>
		
		<p>
		Call:
		1-800-555-9080
		</p>
		<p>
		Email:
		support@learning solutions.com
		</p>
		<p>
		Our mailing address is:
		</p>
		<p>
		2342 N First St Milwaukee WI, 53222
		</p>
	</div>
</div>

<?php

//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';

?>


<?php require 'footer.php'; ?>