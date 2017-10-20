<?php
	include '../../../../adminlibrary/phplib.php'; 
	$tid = $_POST['tid'];
	$ttable = "t".$tid;
	$sql = "select * from $ttable";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		include '../../module/update/update-questions.php';
	}else
	{
		include '../../module/update/create-test-table.php';
	}
?>
