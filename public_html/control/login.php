<?php
	session_start();
	date_default_timezone_set("Asia/Kolkata");
	
	include '../../adminlibrary/phplib.php';
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$pwd = $password;
	$password = md5($password);

	if(strlen($mobile) == 10){	
		if(strlen($pwd)>0){	
			$sql = "select * from user where mobile = '{$mobile}'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				if ($password == $row['password']) {
					$_SESSION['user'] = $row['uid'];
					echo "success";
				}else{
					echo "Password DoNot Match";
				}
			}else{
				echo "You are not registered Please Login";
			}
		}else{
			echo "Please Enter Password";
		}
	}else{
		echo "Enter Correct 10 digit Mobile No.";
	}
?>