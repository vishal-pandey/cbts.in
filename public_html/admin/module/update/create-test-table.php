<?php
	$sql = "select * from test where tid = '{$tid}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<table class="table table-bordered">
	<tr>
		<th>Id</th>
		<th>Test Name</th>
		<th>Duration</th>
		<th>Correct Score</th>
		<th>Incorrect Score</th>
		<th>Percentage to Pass</th>
		<th>No. Of Questions</th>
		<th>No. Of Sections</th>
	</tr>
	<?php
	echo "<tr>
			<td>{$row['tid']}</td>
			<td>{$row['name']}</td>
			<td>{$row['duration']}</td>
			<td>{$row['correct_score']}</td>
			<td>{$row['incorrect_score']}</td>
			<td>{$row['per_to_pass']}</td>
			<td>{$row['no_of_ques']}</td>
			<td>{$row['no_of_section']}</td>
		</tr>";
	?>
</table>
<div class="col-sm-8" style="float: initial; margin-left: auto; margin-right: auto; text-align: center;">
	<form class="control section-table" id="<?php echo $row['tid'] ?>" action="./control/create-test-table.php">
		<h3>Enter Name Of the Sections / Subjects (e.g, Maths)</h3>
		<input type="hidden" name="tid" value="<?php echo $row['tid'] ?>">
		<input type="hidden" name="no_of_ques" value="<?php echo $row['no_of_ques'] ?>">
		<input type="hidden" name="no_of_section" value="<?php echo $row['no_of_section'] ?>">
		<?php
			$i = 0;
			$no_of_section = $row['no_of_section'];
			while ($no_of_section >= 1) {
				$i++;
				echo "<input type='text' name='section[]' class='form-control' placeholder='Name of section {$i}'>";
				$no_of_section--;
			}
		?>
		<br>
		<button class="btn btn-default">Submit</button>
	</form>
	<p></p>
</div>
<script type="text/javascript">
	$(".control").submit(function(e) {
	    var url = $(this).attr("action");
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $(this).serialize(), 
	           success: function(data)
	           {
	           		// alert(data);
	           		// $("p").html(data);
	           		var abc = $(".section-table").attr("id");
					$.post("./module/update/updatetest.php",
				    {
				        tid: abc
				    },
				    function(data, status){
				        $(".update-test").html(data);
				    });
	           }
	         });
	    e.preventDefault(); 
	});
</script>