<?php
session_start();

$_SESSION['timeout'] = "Time Up"; // Give the user Ten minutes
echo '<script type="text/javascript">
		           window.location = "./end.php";
      </script>';
?>