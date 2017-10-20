<script type="text/javascript">
	$(document).ready(function(){
		
		tinymce.init({
		  selector: '.option',
		  setup : function (editor) {
		        editor.on('change', function () {
		            editor.save();
		        });
		    },
		  menubar: false,
		  plugins: [
		    'advlist autolink lists link image charmap print preview anchor textcolor',
		    'searchreplace visualblocks code fullscreen',
		    'insertdatetime media table contextmenu paste code help'
		  ],
		  toolbar: 'insert | bold italic backcolor  | bullist numlist',
		  content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css']
		});

		tinymce.init({
		  selector: 'textarea',
		  setup : function (editor) {
		        editor.on('change', function () {
		            editor.save();
		        });
		    },
		  menubar: false,
		  plugins: [
		    'advlist autolink lists link image charmap print preview anchor textcolor',
		    'searchreplace visualblocks code fullscreen',
		    'insertdatetime media table contextmenu paste code help'
		  ],
		  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
		  content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css']
		});
	})


	$(".control").submit(function(e) {
	    e.preventDefault(); 
	    var url = $(this).attr("action");
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $(this).serialize(), 
	           success: function(data)
	           {
					// alert(data);
		     	 	$(".message").css("display","block");
					$(".message").html(data);
					$(".message").append("<button class='closee pull-right btn btn-danger' onclick='message_close()'>Close</button>");
						if(data=="Question Updated Success Fully"){
							var abc = $(".question-no").attr("id");
							$.post("./module/update/question-list.php",
						    {
						        tid: abc,
						    },
						    function(data, status){
						        $(".question-list").html(data);
						    });
						}
	           }
	         });
	});
	function message_close() {
		$(".message").html("");
		$(".message").css("display","none");
	}
</script>


<?php 
	include '../../../../adminlibrary/phplib.php'; 
	$tid = $_POST['tid'];
	$qno = $_POST['qno'];
	$ttable = "t".$tid;
	$sql = "select * from test where tid = '{$tid}'";
	$result = $conn->query($sql);
	$test = $result->fetch_assoc();

	$sql2 = "select * from {$ttable} where qno = '{$qno}'";
	$result2 = $conn->query($sql2);
	$question = $result2->fetch_assoc();
?>
<form action="./control/insert-question.php" class="control">
	<h3><?php echo $test['name']." <small>    (".$test['duration']." min) (".$test['no_of_ques']." Questions) ({$tid})</small>"; ?></h3>
	<hr style="margin: 10px; background-color: grey;">
	<input type="hidden" name="tid" value="<?php echo $tid; ?>">
	<input type="hidden" name="qno" value="<?php echo $qno; ?>">
	<div class="col-sm-12 text-container" >
		<h4>Question <?php echo $question['qno']; ?> <small> (<?php echo $question['section'] ?>)</small></h4>
		<textarea rows="10" name="question" class="question"><?php echo $question['question']; ?></textarea>
	</div>
	<div class="col-sm-6 text-container" >
		<h4>Option 1</h4>
		<textarea class="option" name="op1"><?php echo $question['op1']; ?></textarea>
	</div>
	<div class="col-sm-6 text-container" >
		<h4>Option 2</h4>
		<textarea class="option" name="op2"><?php echo $question['op2']; ?></textarea>
	</div>
	<div class="col-sm-6 text-container" >
		<h4>Option 3</h4>
		<textarea class="option" name="op3"><?php echo $question['op3']; ?></textarea>
	</div>
	<div class="col-sm-6 text-container" >
		<h4>Option 4</h4>
		<textarea class="option" name="op4"><?php echo $question['op4']; ?></textarea>
	</div>
	<select class="form-control" name="ans">
		<?php
			if ($question['ans'] == 'op1') {
				echo "<option value='0'>Select The right answer</option>
						<option value='op1' selected='true'>Option1</option>
						<option value='op2'>Option2</option>
						<option value='op3'>Option3</option>
						<option value='op4'>Option4</option>";
			}elseif($question['ans'] == 'op2'){
				echo "<option value='0'>Select The right answer</option>
						<option value='op1'>Option1</option>
						<option value='op2' selected='true'>Option2</option>
						<option value='op3'>Option3</option>
						<option value='op4'>Option4</option>";
			}
			elseif($question['ans'] == 'op3'){
				echo "<option value='0'>Select The right answer</option>
						<option value='op1'>Option1</option>
						<option value='op2'>Option2</option>
						<option value='op3' selected='true'>Option3</option>
						<option value='op4'>Option4</option>";
			}
			elseif($question['ans'] == 'op4'){
				echo "<option value='0'>Select The right answer</option>
						<option value='op1'>Option1</option>
						<option value='op2'>Option2</option>
						<option value='op3'>Option3</option>
						<option value='op4' selected='true'>Option4</option>";
			}else{
				echo "<option value='0'>Select The right answer</option>
						<option value='op1'>Option1</option>
						<option value='op2'>Option2</option>
						<option value='op3'>Option3</option>
						<option value='op4'>Option4</option>";
			}

		?>
	</select>
	<button class="btn btn-success">Submit</button>
</form>


<style type="text/css">
	.text-container{border: 1px solid lightgrey; padding: 0px; padding-right: 2px;}
	.closee{
		margin: 0;
	}

</style>