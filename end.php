<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>SSC Test</title>
	<?php include './content/head.html'; ?>
</head>
<body>
	<header class="col-sm-12"><center><h4>SSC Monk Test CBTS</h4></center></header>
	<section class="col-sm-2"></section>
	<section class="col-sm-8"><br><br>
		<div class="well">
			<center>
			<h1>
			<?php
				if (isset($_SESSION['timeout'])) {
					echo $_SESSION['timeout'];
				}
			?>
			<br><br>
				Thank You For Taking CBTS Monk Test.<br><br> Your Result Would Be Uploaded to Our Website <b>"http://www.cbts.in/"</b> By Tommorow.<br><br>You may leave now <br><br>!!!!! Have A Great Day !!!!!
			</h1>
			</center>
			
		</div>		
	</section>
	<section class="col-sm-2"></section>
</body>
</html>