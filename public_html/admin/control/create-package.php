<?php
	include "../../../adminlibrary/phplib.php";
	date_default_timezone_set("Asia/Kolkata");
	$pid = rand(1000000000,9999999999);
	$ptable = "p".$pid;
	$name =  $_POST['name'];
	$price =  $_POST['price'];
	$description =  $_POST['description'];
	$price =  $_POST['price'];
	$creation = date("Y-m-d h:i:s");
	$form = $_POST['form'];


	if ($form == "create-package") {
		$sql = "insert into package (pid , name , description , price , creation) values ('{$pid}' , '{$name}' , '{$description}' , '{$price}' , '{$creation}')";
		$sql2 = "create table {$ptable} (test bigint(10) primary key , foreign key (test) references test(tid) ON DELETE CASCADE)";
		$conn->query($sql);
		$conn->query($sql2);
	}
	if ($form == "delete-package") {
		$pid = $_POST['pid'];
		$ptable = "p".$pid;
		$sql = "delete from package where pid = '{$pid}'";
		$conn->query($sql);
		$sql = "drop table {$ptable}";
		$conn->query($sql);
	}
?>