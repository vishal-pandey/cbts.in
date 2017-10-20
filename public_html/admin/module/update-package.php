<?php
	include "../../../adminlibrary/phplib.php";
	$sql = "select * from package order by creation desc";
	$result = $conn->query($sql);
?>
<div class="col-sm-12">
	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Package Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Created On</th>
			<!-- <th>No. Test</th> -->
			<th>Update</th>
		</tr>
		<?php
			while ($row = $result->fetch_assoc()) {
				echo "
						<tr>
							<td>{$row['pid']}</td>
							<td>{$row['name']}</td>
							<td>{$row['description']}</td>
							<td>{$row['price']}</td>
							<td>{$row['creation']}</td>
							<td><button class='btn btn-default theupdate' id='".$row['pid']."'>Update</button></td>
						</tr>
					";
			}

		?>

	</table>

</div>

<script type="text/javascript">
	$(".theupdate").click(function(){
		clickupdate();
		var abc = $(this).attr("id");
		    $.post("./module/update-package/update.php",
		    {
		        pid: abc
		    },
		    function(data, status){
		        $(".update-package").html(data);
		    });
	});

	function clickupdate() {
		$("button#update-package").click();
	}
</script>