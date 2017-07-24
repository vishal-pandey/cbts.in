<?php 
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";

	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "DELETE FROM rstu ";
	$conn->query($sql);



	$i=0;
	while (isset($_POST['name'][$i])) {
		$sql = "INSERT INTO rstu (name , rollno , password) VALUES ('".$_POST['name'][$i]."' , '".$_POST['rollno'][$i]."' , '".$_POST['password'][$i]."')";
		$result = $conn->query($sql);
		$i++;
		echo $sql;	
	}
	
?>
<script type="text/javascript">
	window.location.href = './addstudent.php';
</script>