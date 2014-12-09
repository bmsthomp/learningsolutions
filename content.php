<?php 
	session_start();
	// if not authenticated go back to index.php
	if (!$_SESSION['password']){
		session_destroy();
		header("location:index.php");
	}

	require 'head.php';

	require 'connect.php';

	$tbl_name = "content";
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
					echo "<a href=\"viewer.php?type=$row[2]&filename=$row[1]&url=$row[3]\" class=\"list-group-item\">$row[1]</a>";

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
					echo "<a href=\"viewer.php?type=$row[2]&filename=$row[1]&url=$row[3]\" class=\"list-group-item\">$row[1]</a>";

				}
			?>
		</div>
	</div>

</div>



<!-- start of footer -->
<?php require 'footer.php' ?>
