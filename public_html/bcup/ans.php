<?php
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";
	$conn = new mysqli($server , $user , $pwd , $db);

	$qno = $_GET['qno'];
	$review = "rr".$qno;

	if ($qno >= '1' && $qno <='24') {
		$rqno = $qno+1;
		$rques = '#english';
		$redir = $rqno.$rques;
	}
	elseif ($qno >= '25' && $qno <='49') {
		$rqno = $qno+1;
		$rques = '#math';
		$redir = $rqno.$rques;	
	}
	elseif ($qno >= '50' && $qno <='74') {
		$rqno = $qno+1;
		$rques = '#reasoning';
		$redir = $rqno.$rques;
	}
	elseif ($qno >= '75' && $qno <'100') {
		$rqno = $qno+1;
		$rques = '#gk';
		$redir = $rqno.$rques;
	}
	else{
		$rqno = $qno;
		$rques = '#gk';
		$redir = $rqno.$rques;	
	}


	if($_POST['ans']){
		$ans = $_POST['ans'];
		$sql = "INSERT INTO {$_COOKIE['table']} VALUES ('{$qno}' , '{$ans}')";
		$conn->query($sql);
		unset($_COOKIE[$review]);
		setcookie($review , "" , -1 ,'/');
	}
	if(isset($_POST['review'])){
		setcookie( $review , $qno , time() + (86400), "/");
	}

		echo '<script type="text/javascript">'.
		           'window.location = "./index.php?qno='.$redir.'"'.
		      '</script>';
?>