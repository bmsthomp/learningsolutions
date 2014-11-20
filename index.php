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
							<input class="form-control input-sm" name="username" required length="50" autofocus type="text" placeholder="Enter Email" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];}?>">
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
		<p>Bacon ipsum dolor amet turkey tri-tip tongue, chuck capicola filet mignon pork belly picanha spare ribs tenderloin brisket meatloaf venison. Ground round meatball t-bone chuck shank flank fatback, pig spare ribs. Tenderloin venison pork chop pork belly alcatra, pork loin ham brisket filet mignon pork sausage picanha fatback porchetta. Tenderloin frankfurter bacon leberkas strip steak swine. Landjaeger ground round venison shoulder pancetta shank leberkas corned beef bacon brisket doner. Ham hock shankle pork belly, ham filet mignon sausage andouille tri-tip tenderloin short loin salami. Pork flank turkey biltong, fatback pig chuck drumstick ball tip sirloin pork belly short ribs.</p>
		<p>Short loin beef sirloin tri-tip capicola turducken strip steak, spare ribs shoulder. Tongue flank meatloaf chuck drumstick pastrami, leberkas cupim tenderloin pork chop. Tenderloin porchetta pancetta, cow biltong andouille short ribs swine ham hock kevin bacon. Frankfurter salami pastrami ham, sirloin meatloaf kevin boudin short loin ball tip drumstick jowl strip steak.</p>
		<p>Rump alcatra pork loin jerky ham hock kielbasa bacon boudin porchetta flank cow drumstick tri-tip. Leberkas biltong capicola venison corned beef jowl short loin shankle salami doner frankfurter. Shank chicken pork chop, ham meatball beef ribs turducken andouille short ribs leberkas chuck. Frankfurter swine ribeye t-bone, sausage sirloin meatloaf rump. Bacon leberkas cow drumstick shank, landjaeger chicken doner prosciutto boudin sausage biltong. Shank t-bone ham hamburger.</p>
		<p>Doner strip steak corned beef pork chop pork belly picanha chicken prosciutto hamburger fatback. Chuck beef shank meatloaf jowl drumstick spare ribs ground round capicola ham meatball shankle rump alcatra boudin. Tenderloin turducken chicken rump ham, porchetta venison tail sirloin brisket sausage. Ground round porchetta biltong tail tenderloin short ribs, boudin ham hock bacon.</p>
	</div>
</div>
<div class="container">
	<div class="col-lg-12">
		<div class="page-header"><div class="row"><div class="col-lg-12"><h1>About Us</h1></div></div></div>
		<p>Bacon ipsum dolor amet turkey tri-tip tongue, chuck capicola filet mignon pork belly picanha spare ribs tenderloin brisket meatloaf venison. Ground round meatball t-bone chuck shank flank fatback, pig spare ribs. Tenderloin venison pork chop pork belly alcatra, pork loin ham brisket filet mignon pork sausage picanha fatback porchetta. Tenderloin frankfurter bacon leberkas strip steak swine. Landjaeger ground round venison shoulder pancetta shank leberkas corned beef bacon brisket doner. Ham hock shankle pork belly, ham filet mignon sausage andouille tri-tip tenderloin short loin salami. Pork flank turkey biltong, fatback pig chuck drumstick ball tip sirloin pork belly short ribs.</p>
		<p>Short loin beef sirloin tri-tip capicola turducken strip steak, spare ribs shoulder. Tongue flank meatloaf chuck drumstick pastrami, leberkas cupim tenderloin pork chop. Tenderloin porchetta pancetta, cow biltong andouille short ribs swine ham hock kevin bacon. Frankfurter salami pastrami ham, sirloin meatloaf kevin boudin short loin ball tip drumstick jowl strip steak.</p>
		<p>Rump alcatra pork loin jerky ham hock kielbasa bacon boudin porchetta flank cow drumstick tri-tip. Leberkas biltong capicola venison corned beef jowl short loin shankle salami doner frankfurter. Shank chicken pork chop, ham meatball beef ribs turducken andouille short ribs leberkas chuck. Frankfurter swine ribeye t-bone, sausage sirloin meatloaf rump. Bacon leberkas cow drumstick shank, landjaeger chicken doner prosciutto boudin sausage biltong. Shank t-bone ham hamburger.</p>
		<p>Doner strip steak corned beef pork chop pork belly picanha chicken prosciutto hamburger fatback. Chuck beef shank meatloaf jowl drumstick spare ribs ground round capicola ham meatball shankle rump alcatra boudin. Tenderloin turducken chicken rump ham, porchetta venison tail sirloin brisket sausage. Ground round porchetta biltong tail tenderloin short ribs, boudin ham hock bacon.</p>
	</div>
</div>

<?php

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

?>


<?php require 'footer.php'; ?>