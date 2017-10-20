<?php 
	$sql = "select * from test where tid = '{$tid}'";
	$result = $conn->query($sql);
	$test = $result->fetch_assoc();
?>
<div class="col-sm-9 question-no" style="height: 90vh; overflow-y: auto; text-align: center; padding-bottom: 50px;" id="<?php echo $tid ?>">
	

	
</div>
<div class="col-sm-3 question-list" style="height: 90vh; overflow-y: auto; text-align: center; border-left: 1px solid lightgrey; padding-bottom: 50px;" id="<?php echo $tid; ?>">
	<h3>Questions</h3>
	
</div>

<script type="text/javascript">
  
$(document).ready(function(){
	function question_list() {
		var abc = $(".question-no").attr("id");
		$.post("./module/update/question-list.php",
	    {
	        tid: abc,
	    },
	    function(data, status){
	        $(".question-list").html(data);
	    });
	}
	question_list();
});

</script>