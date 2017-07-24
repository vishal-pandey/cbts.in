<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
$_SESSION['timer'] = time() + 3601; // Give the user Ten minutes
echo '<script type="text/javascript">
		           window.location = "./index.php?qno=1#english";
      </script>';
?>