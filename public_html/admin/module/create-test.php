<?php include '../../../adminlibrary/phplib.php'; ?>
<div class="col-sm-6">
	<h3 align="center"> Create Test </h3>
	<form action="./control/create-test.php" class="control">
		<input type="text" name="name" class="form-control" placeholder="Test Name">
		<input type="text" name="duration" class="form-control" placeholder="Duration">
		<input type="text" name="correct_score" class="form-control" placeholder="Correct Score">
		<input type="text" name="incorrect_score" class="form-control" placeholder="Incorrect Score">
		<input type="text" name="per_to_pass" class="form-control" placeholder="Percentage To Pass">
		<input type="text" name="no_of_ques" class="form-control" placeholder="No. Of Questions">
		<input type="text" name="no_of_section" class="form-control" placeholder="No. Of Sections">
		<center><button class="btn btn-default the">Create</button></center>
	</form>
	<br>
	<hr>
	<h3 align="center"> Delete Test </h3>
	<form action="./control/create-test.php" class="control">
		<input type="hidden" name="delete" value="delete-package">
		<select name="tid" class="form-control">
			<option value="0">Select To Delete</option>
		<?php
			$sql = "select tid, name, creation from test";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				echo "<option value='".$row['tid']."'>".$row['name']."  Created On ".$row['creation']."</option>";
			}
		?>
		</select>
		<center><button class="btn btn-default the">Delete</button></center>
	</form>
	
</div>
<div class="col-sm-6" style="height: 90vh; overflow-y: auto; border-left: 1px solid lightgrey;">
	<table class="table table-bordered">
		<tr>
			<th>Name</th>
			<th>Questions</th>
			<th>Update</th>
		</tr>
	<?php
		
		$sql = "select * from test order by creation desc";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			echo "<tr>
						<td>".$row['name']."</td>
						<td>".$row['no_of_ques']."</td>
						<td><button class='btn btn-default theupdate' id='".$row['tid']."'>Update</button></td>
					</tr>";
		}
	?>
	</table>
</div>

<script type="text/javascript">

$(document).ready(function(){
	$(".control").submit(function(e) {
	    var url = $(this).attr("action");
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $(this).serialize(), 
	           success: function(data)
	           {
					refr_page();
	           }
	         });

	    e.preventDefault(); 
	});
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
});
function refr_page() {
	$("button#create-test").click();
}
function clickupdate() {
	$("button#update-test").click();
}
</script>
