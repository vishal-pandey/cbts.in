<?php
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";

	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "SELECT * FROM tid1";
	$result = $conn->query($sql);

	class ques{}
	class cont{}

	$ques = new ques;
	while($row = $result->fetch_assoc()){
		$cont = new cont;
		$cont->instruction = $row['instruction'];
		$cont->question = $row['question'];
		$cont->a1 = $row['a1'];
		$cont->a2 = $row['a2'];
		$cont->a3 = $row['a3'];
		$cont->a4 = $row['a4'];
		$ques->$row['qno'] = $cont;
	}
	echo json_encode($ques);
?>