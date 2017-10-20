<?php
	include "../../../adminlibrary/phplib.php"; 
	$tid = $_POST['tid'];
	$ttable = "t".$tid;
	$qno = $_POST['qno'];
	$question = $_POST['question'];	
	$op1 = $_POST['op1'];
	$op2 = $_POST['op2'];
	$op3 = $_POST['op3'];
	$op4 = $_POST['op4'];
	$ans = $_POST['ans'];
	$error = "";
	if ($question == "") {
		$error .= "Please Enter Question";
	}
	elseif ($op1 == "") {
		$error .= "Please Enter Option 1";
	}
	elseif ($op2 == "") {
		$error .= "Please Enter Option 2";
	}
	elseif ($op3 == "") {
		$error .= "Please Enter Option 3";
	}
	elseif ($op4 == "") {
		$error .= "Please Enter Option 4";
	}
	else if ($ans == '0') {
		$error .= "Please Select Right Answer";
	}else{
		$sql = "update {$ttable} set question = '{$question}' , op1 = '{$op1}' , op2 = '{$op2}' , op3 = '{$op3}' , op4 = '{$op4}' , ans = '{$ans}' where qno = '{$qno}' ";
		if($conn->query($sql)){
			$error .= "Question Updated Success Fully";
		}else{
			$error .= "Error Updating Question";
		}
	}
	echo $error;
?>