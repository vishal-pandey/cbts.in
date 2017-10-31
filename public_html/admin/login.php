<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<?php include './content/head.php';?>
</head>
<body>
	<div class="col-sm-12">
		<br><br><br><br><br>
		<div class="col-sm-6 login-form well">
			<h3>Admin Login</h3>
			<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				<input type="text" name="userid" class="form-control" placeholder="User Id">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<input type="submit" name="submit" class="btn btn-default">
			</form>
			<p class="error"><?php echo $_SESSION['error']; $_SESSION['error']=""; ?></p>
		</div>
	</div>
</body>
</html>
<?php
	$password = md5($_POST['password']);
	if (isset($_POST['password'])) {
		if ($password == "8b64d2451b7a8f3fd17390f88ea35917" && $_POST['userid'] == "admin"
		 ) {
			$_SESSION['admin'] = "admin";
		}else{
			$_SESSION['error'] = "Sorry Wrong Credentials";
		}
	}
?>
<style type="text/css">
	.login-form{
		float: initial;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}
	.error{
		color: red;
	}
</style>