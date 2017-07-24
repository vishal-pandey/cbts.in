<?php
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";

	$table = $_COOKIE['table'];

	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "DELETE from {$table} where qno = ".$_GET['qno'];
	$conn->query($sql);


	$qno = $_GET['qno'];

	$review = "rr".$qno;

	if ($qno >= '1' && $qno <='25') {
		$rqno = $qno;
		$rques = '#english';
		$redir = $rqno.$rques;
	}
	elseif ($qno >= '26' && $qno <='50') {
		$rqno = $qno;
		$rques = '#math';
		$redir = $rqno.$rques;	
	}
	elseif ($qno >= '51' && $qno <='75') {
		$rqno = $qno;
		$rques = '#reasoning';
		$redir = $rqno.$rques;
	}
	elseif ($qno >= '76' && $qno <='100') {
		$rqno = $qno;
		$rques = '#gk';
		$redir = $rqno.$rques;
	}
	
	unset($_COOKIE[$review]);
	setcookie($review , "" , -1 ,'/');

	echo '<script type="text/javascript">'.
		           'window.location = "./index.php?qno='.$redir.'"'.
		      '</script>';
?>