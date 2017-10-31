<?php session_start(); ?>
<?php date_default_timezone_set("Asia/Kolkata"); ?>
<?php
	// unset($_SESSION['user']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>CBTS - Computer Based Test Series</title>
	<?php
		if (isset($_SESSION['user'])) {
			include "./module/dashboard/content/head.php";
		}else{
			include './content/head.php';
		}
	?>
</head>
<body>
	<?php
		if (isset($_SESSION['user'])) {
			include './module/dashboard/home.php';
		}else{
			include "./module/login/login.php";	
		}
	?>
	<?php  ?>
</body>
</html>
