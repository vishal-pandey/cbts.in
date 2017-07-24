<?php 
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";

	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "SELECT * FROM rstu ";
	$result = $conn->query($sql);
	
?>
</script>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>SSC Test</title>
 	<?php include '../content/head.html';?>

		 	<script type="text/javascript">
				$(document).ready(function() {
			    var max_fields      = 10; //maximum input boxes allowed
			    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
			    var add_button      = $(".add_field_button"); //Add button ID
			    
			    var x = 1; //initlal text box count
			    $(add_button).click(function(e){ //on add input button click
			        e.preventDefault();
			        if(x < max_fields){ //max input box allowed
			            x++; //text box increment
			            $(wrapper).append('<div class="form-group"><input id="name" type="text" class="form-control" name="name[]" required="true" placeholder="name"><input id="rollno" type="text" class="form-control" name="rollno[]" required="true" placeholder="roll no"><input id="password" type="text" class="form-control" name="password[]" required="true" placeholder="password" ><a href="#" class="remove_field">Remove</a></div>'); //add input box
			        }
			    });
			    
			    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
			        e.preventDefault(); $(this).parent('div').remove(); x--;
			    })
				});
			</script>

 </head>
 <body">
 <header class="col-sm-12"><center><b style="font-size: 20px">SSC Test</b></center></header>
	<section class="col-sm-12">
			<div class="col-sm-9 main-section">

					<form action="./stuprocess.php" method="post" class="form-inline">
						<div class="input_fields_wrap">
							
							<?php
								while($row = $result->fetch_assoc())
								{
									
									echo '<div class="form-group"><input id="name" type="text" class="form-control" name="name[]" required="true" placeholder="name" value="'.$row['name'].'"><input id="rollno" type="text" class="form-control" name="rollno[]" required="true" placeholder="roll no" value="'.$row['rollno'].'"><input id="password" type="text" class="form-control" name="password[]" required="true" placeholder="password" value="'.$row['password'].'"><a href="#" class="remove_field">Remove</a></div>';
								}			
							?>
						    <!-- <div><input type="text" name="mytext[]"></div> -->
						</div>
						<button class="add_field_button btn btn-default">Add More Fields</button>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>

			</div>
			<aside class="col-sm-3 right">
			</aside>
	</section>
	<footer class="col-sm-12"><center>This is going to be footer</center></footer>
 </body>
 </html>