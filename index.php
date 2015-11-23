<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQLi Lab by @ahsan044</title>
	<link href='http://www.ahsanshabbir.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link href='assets/css/bootstrap.min.css' rel='stylesheet'/>
	<script src='assets/js/jquery.js'></script>
	<script src='assets/js/js101.js'></script>
</head>
<body>
	<div class="container">
	    <h2>
	    	SQLi Practice Labs by Ahsan Shabbir
	    </h2>
	    <hr />
		<p class="lead">
			<span class="alert alert-warning" role="alert">Note: If you have not configured your database with this lab yet, please follow <a href="install.php"> link</a></span></span>
		</p>
		<hr />
	<div>
		<p class="lead">
			We have Followng labs at the moment..

		</p>
	</div>
	<?php
		$labs = glob('./lab*', GLOB_BRACE);
		$counter = 1;
		foreach($labs as $lab){
			echo "<a href='$lab' role='button' class='btn btn-success btn-large'> Lab -  $counter <a> ";
			$counter++;
			echo "</br>";
		}
	?>	
		<hr />
		</div>
		<hr />
	</div>
</body>
</html>