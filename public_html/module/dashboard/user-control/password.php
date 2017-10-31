<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		die();
	}
    include '../../../../adminlibrary/phplib.php';

    if ($_POST['password'] == '') {
    	echo "Current Password Field Cannnot Be Empty";
    }elseif($_POST['npassword'] == ''){
    	echo "New Password Field Cannot be empty";
    }elseif($_POST['rnpassword'] == ''){
    	echo "Re Enter Password Field Cannot be empty";
    }

    $password = md5($_POST['password']);
    $npassword = md5($_POST['npassword']);
    $rnpassword = md5($_POST['rnpassword']);
	$uid = $_SESSION['user'];
	$sql = "select * from user where uid = '{$uid}' AND password = '{$password}'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		if ($npassword == $rnpassword) {
			$sql2 = "update user set password = '{$npassword}' where uid = '{$uid}'";
			if ($conn->query($sql2)) {
				echo 1;
			}
		}else{
			echo "Please Re Enter Your same new password Again Correctly";
		}
	}else{
		echo "Current Password is not Right";
	}
?>