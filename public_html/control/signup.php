<?php
	session_start();
	include '../../adminlibrary/phplib.php';
	$uid = uniqid();
	$name =  $_POST['name'];
	$mobile =  $_POST['mobile'];
	$password =  $_POST['password'];
	$password = md5($password);

	$sql1 = "insert into user (name , mobile , password , uid) values ('{$name}' , '{$mobile}' , '{$password}' , '{$uid}')";
	// echo $sql;
	if(strlen($mobile) == 10 && strlen($name) > 0 && $password != 'd41d8cd98f00b204e9800998ecf8427e'){
		$sql = "select * from user where mobile = '{$mobile}'";
		$result = $conn->query($sql);
		if (($result->num_rows)>0) {
			$row = $result->fetch_assoc();
			if ($row['mobile'] == $mobile) {
				echo "User Already Registered Please Login";
			}
		}
		else{
			if($conn->query($sql1)){
				echo "success";
				$_SESSION['user'] = $uid;
			}
		}
	}elseif($name == ''){
		echo "Please Enter Your Name";
	}elseif(strlen($mobile) != 10){
		echo "Please Enter Correct 10 Digit Mobile No.";
	}elseif ($password == 'd41d8cd98f00b204e9800998ecf8427e') {
		echo "Please Enter Password";
	}
?>