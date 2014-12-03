<?php 
	session_start();
	// if not authenticated go back to index.php
	if (!$_SESSION['password']){
		session_destroy();
		header("location:index.php");
	}

	require 'head.php';

	// content table query
	$host="localhost"; // Host name 
	$username="thomp362_ls"; // Mysql username 
	$password="fall2014"; // Mysql password
	$db_name="thomp362_learningsolutions"; // Database name 
	$tbl_name="content"; // Table name 

	mysql_connect("$host", "$username", "$password")or die("cannot connect: " . mysqli_connect_error()); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$sql_reading = mysql_query("SELECT * FROM $tbl_name WHERE filetype='pdf'");
	$sql_games = mysql_query("SELECT * FROM $tbl_name WHERE filetype='game'");

?>

<div class="container">
	<div class="col-lg-12">
		<div class="page-header"><div class="row"><div class="col-lg-12"><h1>Welcome <?php echo $_SESSION['username']; ?></h1></div></div></div>

	</div>
	<div class="col-lg-12">
		<div class="list-group">
			<a href="#" class="list-group-item active">
			Reading Material
			</a>
			<?php 
				while($row = mysql_fetch_array($sql_reading)){
					echo "<a href=\"viewer.php?filename=$row[1]&url=$row[3]\" class=\"list-group-item\">$row[1]</a>";

				}
			?>
		</div>
		<div class="list-group">
			<a href="#" class="list-group-item active">
			Educational Games
			</a>
			<?php 
				// loop through all reading items
				// url should be of the viewer + use GET to pass the filename
				while($row = mysql_fetch_array($sql_games)){
					echo "<a href=\"$row[3]\" class=\"list-group-item\">$row[1]</a>";

				}
			?>
		</div>
	</div>

</div>



<!-- start of footer -->
<?php require 'footer.php' ?>
