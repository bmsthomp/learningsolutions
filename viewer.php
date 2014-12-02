<?php 
	session_start();
	// if not authenticated go back to index.php
	if (!$_SESSION['password']){
		session_destroy();
		header("location:index.php");
	}

	require 'head.php';
	$filename=$_REQUEST['filename'];

	echo $filename;

?>

<!-- http://stackoverflow.com/questions/4853898/display-pdf-within-web-browser -->
<div class="container">
	<div class="col-lg-12">
		<iframe src="http://docs.google.com/gview?url=http://path.com/to/your/pdf.pdf&embedded=true" 
		style="width:600px; height:500px;" frameborder="0"></iframe>
	</div>
</div>

<?php 
	require 'footer.php';
?>