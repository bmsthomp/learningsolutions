<?php 
	session_start();
	// if not authenticated go back to index.php
	if (!$_SESSION['password']){
		session_destroy();
		header("location:index.php");
	}

	require 'head.php';
	$url=$_REQUEST['url'];
	$filename=$_REQUEST['filename'];
	$type=$_REQUEST['type'];

?>

<!-- http://stackoverflow.com/questions/4853898/display-pdf-within-web-browser -->
<div class="container">
	<div class="col-lg-12">
		<div class="page-header"><div class="row"><div class="col-lg-12"><h1><?php echo $filename; ?></h1></div></div></div>
		<div class="text-center">
			<?php 
				if ($type=="game"){ echo "<img src=\"$url\">"; }
				else {
					echo "<iframe src=\"http://docs.google.com/gview?url=$url&embedded=true\" 
					style=\"width:600px; height:700px;\" frameborder=\"0\"></iframe>
					</div>
					<p class=\"text-center\"><a target=\"_blank\" href=\"$url\"><button>Download file</button></a></p>
					<p class=\"text-center\"><em>If you would like to view this in your browser, please use a larger viewport.</em>";

				}
			?>
	</div>
</div>

<?php 
	require 'footer.php';
?>