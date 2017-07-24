<!DOCTYPE html>
<html>
<head>
	<title>SSC Test</title>
	<?php include './content/head.html'; ?>
</head>
<body>
	<header class="col-sm-12"><center><h4>SSC Monk Test CBTS</h4></center></header>
	<section class="col-sm-3"></section>
	<section class="col-sm-6"><br><br>
		<div class="well">
			<h1>Login </h1>
			<form method="post" action="logincontrol.php">
				<input type="text" name="rollno" class="form-control" placeholder="Roll No.">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<button type="submit" class="btn btn-default">SUBMIT</button>
				<b style="color: red;"><?php echo $_COOKIE['loginerror']; $_COOKIE['loginerror'] = "";unset($_COOKIE['loginerror']); ?></b>
			</form>			
		</div>		
	</section>
	<section class="col-sm-3"></section>
</body>
</html>