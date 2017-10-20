<?php include '../../../adminlibrary/phplib.php'; ?>
<h3 align="center">Create Package</h3>
<hr>
<div class="col-sm-6" style="height: 80vh; text-align: center; overflow-y: auto;">
	<h4>New Package</h4>
	<hr>
	<form action="./control/create-package.php" class="control">
		<input type="hidden" name="form" value="create-package">
		<input type="text" name="name" class="form-control" placeholder="Package Name ( e.g, SSC )">
		<input type="text" name="price" class="form-control" placeholder="Price">
		<div style="border: 1px solid lightgrey; padding-right: 2px;">
			<h4>Description</h4>
			<textarea name="description"></textarea>
		</div>
		<button class="btn btn-default">Create</button>
	</form>
	<hr>
	<form class="control" action="./control/create-package.php">
		<input type="hidden" name="form" value="delete-package">
		<select name="pid" class="form-control">
			<option value="0">Select Package to delete</option>
			<?php  
				$sql = "select * from package order by creation desc";
				$result = $conn->query($sql);
				while ($row =$result->fetch_assoc()) {
					echo "<option value='{$row['pid']}'>{$row['name']} created on {$row['creation']}</option>";
				}
			?>
		</select>
		<button class="btn btn-default">Delete</button>
	</form>
</div>
<div class="col-sm-6" style="height: 80vh; border-left: 1px solid lightgrey; overflow-y: auto;">
	<table class="table table-bordered">
		<tr>
			<th>Name</th>
			<th>Created On</th>
			<th>Description</th>
			<th>Price</th>
			<th>Update</th>
		</tr>
		<?php
			$sql = "select * from package order by creation desc";
			$result = $conn->query($sql);
			while ($row =$result->fetch_assoc()) {
				echo "
					<tr>
						<td>{$row['name']}</td>
						<td>{$row['creation']}</td>
						<td>{$row['description']}</td>
						<td>{$row['price']}</td>
						<td><button class='btn btn-default theupdate' id='".$row['pid']."'>Update</button></td>
					</tr>
				";
			}
		?>
	</table>
</div>
<script type="text/javascript">
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
		  toolbar: ' bold italic backcolor ',
		  content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css']
		});
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

	function refr_page() {
		$("button#create-package").click();
	}
</script>