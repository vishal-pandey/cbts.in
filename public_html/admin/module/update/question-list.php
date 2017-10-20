	<?php include '../../../../adminlibrary/phplib.php';  ?>
	<h3>Questions</h3>
	<?php
		$tid = $_POST['tid'];
		$ttable = "t".$tid;
		$sql = "select * from {$ttable}";
		$result = $conn->query($sql);
		$section = "";
		while($row = $result->fetch_assoc()){
			if ($section != $row['section']) {
				$section = $row['section'];
				echo "<div class='section'>".$row['section']."</div>";
			}
			if($row['question'] == ""){
				echo "<button class='btn btn-default que' style='width:25%;margin:2px;'>".$row['qno']."</button>";
			}else{
				echo "<button class='btn btn-primary que' style='width:25%;margin:2px;'>".$row['qno']."</button>";
			}
		}
	?>
<script type="text/javascript">
	$("button.que").click(function(){
		var question = $(this).html();
		$("button.que").css("background-color","");
		$(this).css("background-color","orange");
		$(".message").css("display","none");
		var abc = $(".question-no").attr("id");
	    $.post("./module/update/update-question-no.php",
	    {
	        tid: abc,
	        qno:question
	    },
	    function(data, status){
	        $(".question-no").html(data);
	    });
	});
</script>
<style type="text/css">
	.section{
		width: 100%;
		background-color: lightgrey;
		height: 30px;
		font-size: 20px;
		border-radius: 5px;
		font-weight: bold;
	}
</style>