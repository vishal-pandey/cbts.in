<?php include_once "./content/configure.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Admin Panel</title>
	<?php include_once "./content/head.php"; ?>
</head>
<body>
<?php
	session_start();
	if ($_SESSION['admin']=='admin') {
		include "../../admincontent/home.php";
	}else{
		include "./login.php";
	}
?>