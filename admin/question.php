<?php
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";

	$qno = $_POST['qno'];
	$instruction = $_POST['instruction'];
	$question = $_POST['question'];
	$a1 = $_POST['a1'];
	$a2 = $_POST['a2'];
	$a3 = $_POST['a3'];
	$a4 = $_POST['a4'];
	$ra = $_POST['ra'];

	$conn = new mysqli($server , $user , $pwd , $db);
	// $sql = "DELETE (qno , instruction , question , a1 , a2 , a3 , a4 , ra) FROM tid1 where qno =".$qno;
	$sql = "UPDATE tid1 SET instruction = null , question = null , a1 = null , a2 = null , a3 = null , a4 = null , ra = null where qno = ".$qno;
	$conn->query($sql);


	if($conn->query($sql))
	{
		echo "inserted";
	}
	else{
		echo $conn->error;
	}




	if ($_POST['instruction'] == "") {
		
		$sql = "INSERT INTO tid1 (qno , instruction , question , a1 , a2 , a3 , a4 , ra) VALUES ('{$qno}' , null , '{$question}' , '{$a1}' , '{$a2}' , '{$a3}' , '{$a4}' , '{$ra}') ";
	}
	else{
		$sql = "INSERT INTO tid1 (qno , instruction , question , a1 , a2 , a3 , a4 , ra) VALUES ('{$qno}' , '{$instruction}' , '{$question}' , '{$a1}' , '{$a2}' , '{$a3}' , '{$a4}' , '{$ra}') ";
	}
		
		


	if($conn->query($sql))
	{
		echo "inserted";
		
	}
	else{
		if ($_POST['instruction'] == "") {
			$sql = "UPDATE tid1 SET instruction = null , question = '{$question}' , a1 = '{$a1}' , a2 = '{$a2}' , a3 = '{$a3}' , a4 = '{$a4}' , ra = '{$ra}' where qno = ".$qno;
		}
		else{
			$sql = "UPDATE tid1 SET instruction = '{$instruction}' , question = '{$question}' , a1 = '{$a1}' , a2 = '{$a2}' , a3 = '{$a3}' , a4 = '{$a4}' , ra = '{$ra}' where qno = ".$qno;
		}

		$conn->query($sql);
		echo $conn->error;
	}
	echo $instruction;
?>
<script type="text/javascript">
	window.location.href = history.back();
</script>