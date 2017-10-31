<?php
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";

	$conn = new mysqli($server, $user, $pwd, $db);
	
	class user extends mysqli
	{

		function checkLogin(){
			if (isset($_SESSION['user'])) {
				echo("scan");
			}
		}
	}
?>