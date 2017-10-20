<?php
	include "../../../adminlibrary/phplib.php";
	date_default_timezone_set("Asia/Kolkata");

	$tid = rand(1000000000,9999999999);
	$name = $_POST['name'];
	$duration =  $_POST['duration'];
	$correct_score = $_POST['correct_score'];
	$incorrect_score =  $_POST['incorrect_score'];
	$per_to_pass =  $_POST['per_to_pass'];
	$no_of_ques =  $_POST['no_of_ques'];
	$no_of_section =  $_POST['no_of_section'];
	$creation = date("Y-m-d h:i:s");


	

	if ($_POST['delete'] == 'delete-package') {
		$sql = "delete from test where tid = '{$_POST['tid']}'";
		$conn->query($sql);
		$ttable = "t".$_POST['tid'];
		$sql = "drop table {$ttable}";
		$conn->query($sql);
	}else{
		$sql = "insert into test (tid, name, duration, correct_score, incorrect_score, per_to_pass, no_of_ques , no_of_section, creation)values('{$tid}', '{$name}', '{$duration}', '{$correct_score}', '{$incorrect_score}', '{$per_to_pass}', '{$no_of_ques}', '{$no_of_section}', '{$creation}')";

		$conn->query($sql);
	}
?>