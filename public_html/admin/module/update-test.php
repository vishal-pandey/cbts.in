<?php
	if (isset($_GET['test'])) {
		echo $_GET['test'];
	}
	else{
?>

<?php
	include "../../../adminlibrary/phplib.php";
	$sql = "select * from test order by creation desc";
	$result = $conn->query($sql);
	
?>
<div class="col-sm-12">
	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Test Name</th>
			<th>Duration</th>
			<th>Correct Score</th>
			<th>Incorrect Score</th>
			<th>Percentage to Pass</th>
			<th>No. Of Questions</th>
			<th>Update</th>
		</tr>
		<?php
			while ($row = $result->fetch_assoc()) {
				echo "
						<tr>
							<td>{$row['tid']}</td>
							<td>{$row['name']}</td>
							<td>{$row['duration']}</td>
							<td>{$row['correct_score']}</td>
							<td>{$row['incorrect_score']}</td>
							<td>{$row['per_to_pass']}</td>
							<td>{$row['no_of_ques']}</td>
							<td><button class='btn btn-default theupdate' id='".$row['tid']."'>Update</button></td>
						</tr>
					";
			}

		?>

	</table>
	<?php echo $_GET['test']; ?>
</div>
<?php } ?>
<script type="text/javascript">
	$(".theupdate").click(function(){
		clickupdate();
		var abc = $(this).attr("id");
		    $.post("./module/update/updatetest.php",
		    {
		        tid: abc
		    },
		    function(data, status){
		        $(".update-test").html(data);
		    });
	});

	function clickupdate() {
		$("button#update").click();
	}
</script>