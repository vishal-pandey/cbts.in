<?php
	include "../../../adminlibrary/phplib.php";
	$tid =  "t".$_POST['tid'];
	$no_of_ques =  $_POST['no_of_ques'];
	$no_of_section =  $_POST['no_of_section'];

	$sql = "create table {$tid} (qno int(3) , section text , question text , op1 text , op2 text , op3 text , op4 text , ans varchar(5))";
	$conn->query($sql);

	$interval = intval($no_of_ques/$no_of_section);
	$increment = $interval;
	$i = 1;
	$j = 0;
	// echo $sql;
	while ($i<=$no_of_ques) {
		while ($i<=$increment && $i<=$no_of_ques) {
			if ($_POST['section'][$j] == "") {
				$section = "Un Categorised";
			}else
			{
				$section = $_POST['section'][$j];
			}
			$sql = "insert into {$tid} (qno , section) values ('{$i}', '{$section}')";
			$conn->query($sql);
			$i++;
		}
		$increment = $increment+$interval;
		$j++;

	}
	
?>