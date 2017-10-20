<?php
// Upon starting the section
session_start();
date_default_timezone_set("Asia/Kolkata");
?>
<?php 
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";

	$rollno = $_POST['rollno'];
	$password = $_POST['password'];

	$conn = new mysqli($server , $user , $pwd , $db);

	$sql = "SELECT * from rstu where rollno = '{$rollno}' and password = '{$password}'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();


	if(isset($row['name'])){
		setcookie( "rollno", $row['rollno'], time() + (86400), "/");
		setcookie( "name", $row['name'], time() + (86400), "/");
		setcookie( "sp", $row['sp'], time() + (86400), "/");
		$sql1 = "CREATE table r".$row['rollno']." (qno int(3) primary key , ans varchar(5))";
		setcookie( "table", "r".$row['rollno'], time() + (86400), "/");
		$conn->query($sql1);
	
	
		echo '<script type="text/javascript">
		           window.location = "./instructions.php";
		      </script>';
	}
	else{
		setcookie( "loginerror", "Wrong Password or Roll No Try Again", time() + (86400), "/");
		echo "fail";
		echo $sql;
		echo '<script type="text/javascript">
		           window.location = "./login.php"
		      </script>';
	}

?>