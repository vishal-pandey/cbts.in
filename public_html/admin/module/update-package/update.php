<?php include '../../../../adminlibrary/phplib.php'; ?>
<?php
	$sql = "select * from package where pid = '{$_POST['pid']}'";
	$result = $conn->query($sql);
	$package = $result->fetch_assoc();
?>
<h3 align="center">Update Package <?php echo $package['name']; ?></h3>
<hr class="thick">
<div class="col-sm-6 test-in-package" id="<?php echo $package['pid']; ?>">
	<h4>Test in <?php echo $package['name']; ?></h4>
	<div class="content">
		<?php
			$pid = $_POST['pid'];
			$ptable = "p".$pid;
			$sql1 = "select * from {$ptable}";
			$result1 = $conn->query($sql1);
			while ($ptest = $result1->fetch_assoc()) {
				$sql2 = "select * from test where tid = {$ptest['test']}";
				$result2 = $conn->query($sql2);
				$test = $result2->fetch_assoc();
				echo "
					<div class='card'>
						<h5>{$test['name']}</h5>
						<span><b>{$test['no_of_ques']} </b>Ques</span><br>
						<span><b>{$test['duration']} </b>min</span><br>
						<button class='btn btn-danger remove' id='{$test['tid']}'>Remove</button>
					</div>
				";
			}
		?>
	</div>
</div>
<div class="col-sm-6 test-in-total">
	<h4>All Other Test</h4>
	<div class="content">
		<?php
			$sql = "select * from test where tid not in (select test from {$ptable}) order by creation desc";
			$result = $conn->query($sql);
			while($test = $result->fetch_assoc()){
				echo "
					<div class='card'>
						<h5>{$test['name']}</h5>
						<span><b>{$test['no_of_ques']} </b>Ques</span><br>
						<span><b>{$test['duration']} </b>min</span><br>
						<button class='btn btn-success add' id='{$test['tid']}'>Add</button>
					</div>
				";
			}
		?>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".add").click(function(){
			var abc = $(this).attr("id");
			var pid = $(".test-in-package").attr('id');
		    $.post("./control/add-delete.php",
		    {
		        tid: abc,
		        form: 'add',
		        pid: pid
		    },
		    function(data, status){
		    	// alert(data);
		        var pid = $(".test-in-package").attr('id');
			    $.post("./module/update-package/update.php",
			    {
			        pid: pid
			    },
			    function(data, status){
			        $(".update-package").html(data);
			    });
		    });
		});
		$(".remove").click(function(){
			var abc = $(this).attr("id");
			var pid = $(".test-in-package").attr('id');
		    $.post("./control/add-delete.php",
		    {
		        tid: abc,
		        form: 'remove',
		        pid: pid
		    },
		    function(data, status){
		    	// alert(data);
		        var pid = $(".test-in-package").attr('id');
			    $.post("./module/update-package/update.php",
			    {
			        pid: pid
			    },
			    function(data, status){
			        $(".update-package").html(data);
			    });
		    });
		})
	})
</script>





<style type="text/css">
	.test-in-package , .test-in-total{
		/*height: 80vh;*/
		text-align: center;
		border: 1px solid lightgrey;
		padding: 0;
		
	}
	.test-in-package h4 , .test-in-total h4{
		border: 1px solid lightgrey;
		margin: 0;
		padding: 5px;
	}

	.test-in-total .content , .test-in-package .content{
		height: 75vh;
		width: 100%;
		overflow-y: auto;
		padding: 0px;
		text-align: center;
	}
	
	hr.thick{
		display: block;
		border: 0;
		border-top: 5px solid lightgrey;
		margin: 5px;
		margin-bottom: 0;
	}

	.card{
		text-align: center;
		background-color: lightgrey;
		padding: 10px;
		width: 25%;
		margin: 2%;
		text-align: center;
		display: inline-block;;
	}
</style>
