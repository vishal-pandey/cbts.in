<?php 
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";

	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "SELECT * FROM tid1 where qno = ".$_GET['qno'];
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>

<script type='text/javascript'>

(function()
{
  if( window.localStorage )
  {
    if( !localStorage.getItem('firstLoad') )
    {
      localStorage['firstLoad'] = true;
      window.location.reload();
    }  
    else
      localStorage.removeItem('firstLoad');
  }
})();

</script>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>SSC Test</title>
 	<?php include '../content/head.html';?>
 </head>
 <body">
 <header class="col-sm-12"><center><b style="font-size: 20px">SSC Test</b></center></header>
	<section class="col-sm-12">
			<div class="col-sm-9 main-section">
				<form method="post" action="question.php">
					<div class="col-sm-12"><center><h3>Question No. <input type="text" required="true" name="qno" value="<?php echo $_GET['qno']?>"></h3></center></div>				
					<div class="well col-sm-6">
						<textarea class="form-control" rows="20" placeholder="Instruction" name="instruction"><?php if (isset($row['instruction'])) {echo $row['instruction'];}?></textarea>
					</div>
					<div class="well col-sm-6">
						<textarea class="form-control" rows="5" placeholder="Question" name="question"><?php if (isset($row['question'])) {echo $row['question'];}?></textarea>
					</div>
					<div class="well col-sm-6">
						<input type="text" required="true" name="a1" class="form-control" placeholder="Answer 1" value="<?php if (isset($row['a1'])) {echo $row['a1'];}?>">
						<input type="text" required="true" name="a2" class="form-control" placeholder="Answer 2" value="<?php if (isset($row['a2'])) {echo $row['a2'];}?>">
						<input type="text" required="true" name="a3" class="form-control" placeholder="Answer 3" value="<?php if (isset($row['a3'])) {echo $row['a3'];}?>">
						<input type="text" required="true" name="a4" class="form-control" placeholder="Answer 4" value="<?php if (isset($row['a4'])) {echo $row['a4'];}?>">
					</div>

					<div class="well col-sm-6">
						<?php 
							
							if ($row['ra'] == "a1") {
								echo '<select name="ra" class="form-control">'.
										'<option value="0">Select</option>'.
										'<option value="a1" selected = "selected">a1</option>'.
										'<option value="a2">a2</option>'.
										'<option value="a3">a3</option>'.
										'<option value="a4">a4</option>'.
									'</select>';	
							}
							elseif ($row['ra'] == "a2") {
								echo '<select name="ra" class="form-control">'.
										'<option value="0">Select</option>'.
										'<option value="a1">a1</option>'.
										'<option value="a2" selected = "selected">a2</option>'.
										'<option value="a3">a3</option>'.
										'<option value="a4">a4</option>'.
									'</select>';	
							}
							elseif ($row['ra'] == "a3") {
								echo '<select name="ra" class="form-control">'.
										'<option value="0">Select</option>'.
										'<option value="a1">a1</option>'.
										'<option value="a2">a2</option>'.
										'<option value="a3" selected = "selected">a3</option>'.
										'<option value="a4">a4</option>'.
									'</select>';	
							}
							elseif ($row['ra'] == "a4") {
								echo '<select name="ra" class="form-control">'.
										'<option value="0">Select</option>'.
										'<option value="a1">a1</option>'.
										'<option value="a2">a2</option>'.
										'<option value="a3">a3</option>'.
										'<option value="a4" selected = "selected">a4</option>'.
									'</select>';	
							}
							else
							{
								echo '<select name="ra" class="form-control">'.
										'<option value="0" selected = "selected">Select</option>'.
										'<option value="a1">a1</option>'.
										'<option value="a2">a2</option>'.
										'<option value="a3">a3</option>'.
										'<option value="a4">a4</option>'.
									'</select>';
							}
						?>
					</div>

					<div class="well col-sm-6">
						<center><button type="submit" class="btn btn-success">Submit</button></center>
					</div>
				</form>
				<form action="iupload.php?qno=<?php echo $_GET['qno']; ?>" method="post" enctype="multipart/form-data">
					<div class="well col-sm-12">
						<h5>Instruction</h5>
						<div class="well">
							<img src="../pics/<?php echo $row['ip']; ?>" class="apics">
						</div>
						<input type="file" name="instruction" class="form-control">
						<button type="submit" class="btn btn-default">Upload</button>
					</div>
				</form>
				<form action="a1upload.php?qno=<?php echo $_GET['qno']; ?>" method="post" enctype="multipart/form-data">
					<div class="well col-sm-12">
						<h5>Answer 1</h5>
						<div class="well">
							<img src="../pics/<?php echo $row['a1p']; ?>" class="apics">
						</div>
						<input type="file" name="a1" class="form-control">
						<button type="submit" class="btn btn-default">Upload</button>
					</div>
				</form>
				<form action="a2upload.php?qno=<?php echo $_GET['qno']; ?>" method="post" enctype="multipart/form-data">
					<div class="well col-sm-12">
						<h5>Answer 2</h5>
						<div class="well">
							<img src="../pics/<?php echo $row['a2p']; ?>" class="apics">
						</div>
						<input type="file" name="a2" class="form-control">
						<button type="submit" class="btn btn-default">Upload</button>
					</div>
				</form>
				<form action="a3upload.php?qno=<?php echo $_GET['qno']; ?>" method="post" enctype="multipart/form-data">
					<div class="well col-sm-12">
						<h5>Answer 3</h5>
						<div class="well">
							<img src="../pics/<?php echo $row['a3p']; ?>" class="apics">
						</div>
						<input type="file" name="a3" class="form-control">
						<button type="submit" class="btn btn-default">Upload</button>
					</div>
				</form>
				<form action="a4upload.php?qno=<?php echo $_GET['qno']; ?>" method="post" enctype="multipart/form-data">
					<div class="well col-sm-12">
						<h5>Answer 4</h5>
						<div class="well">
							<img src="../pics/<?php echo $row['a4p']; ?>" class="apics">
						</div>
						<input type="file" name="a4" class="form-control">
						<button type="submit" class="btn btn-default">Upload</button>
					</div>
				</form>

				<a href="./reset.php?qno=<?php echo $_GET['qno']; ?>"><button type="button" class="btn btn-danger">Reset</button></a>
			</div>
			<aside class="col-sm-3 right">
				<div class="panel panel-success" id="english">
				<div class="panel-heading">English</div>
				<div class="panel-body">
				<?php 
					for ($i=1; $i <=25 ; $i++) 
					{
						$sql1 = "SELECT * FROM tid1 where qno = ".$i;
						$result1 = $conn->query($sql1);
						$row1 = $result1->fetch_assoc();

						if (isset($row1['qno'])) {
						echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="btn btn-success qno col-sm-3">'.$i.'</button></a>';
						}
						else{
						echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="btn btn-warning qno col-sm-3">'.$i.'</button></a>';
						}
					}
				?>
				</div>
				</div>

				<div class="panel panel-primary" id="math">
				<div class="panel-heading">Maths</div>
				<div class="panel-body">
				<?php 
					for ($i=26; $i <=50 ; $i++) 
					{
						$sql1 = "SELECT * FROM tid1 where qno = ".$i;
						$result1 = $conn->query($sql1);
						$row1 = $result1->fetch_assoc();

						if (isset($row1['qno'])) {
						echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="btn btn-success qno col-sm-3">'.$i.'</button></a>';
						}
						else{
						echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="btn btn-warning qno col-sm-3">'.$i.'</button></a>';
						}
					}
				?>
				</div>
				</div>

				<div class="panel panel-warning" id="reasoning">
				<div class="panel-heading">Reasoning</div>
				<div class="panel-body">
				<?php 
					for ($i=51; $i <=75 ; $i++) 
					{
						$sql1 = "SELECT * FROM tid1 where qno = ".$i;
						$result1 = $conn->query($sql1);
						$row1 = $result1->fetch_assoc();

						if (isset($row1['qno'])) {
						echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="btn btn-success qno col-sm-3">'.$i.'</button></a>';
						}
						else{
						echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="btn btn-warning qno col-sm-3">'.$i.'</button></a>';
						}
					}
				?>
				</div>
				</div>

				<div class="panel panel-info" id="gk">
				<div class="panel-heading">GK</div>
				<div class="panel-body">
				<?php 
					for ($i=76; $i <=100 ; $i++) 
					{
						$sql1 = "SELECT * FROM tid1 where qno = ".$i;
						$result1 = $conn->query($sql1);
						$row1 = $result1->fetch_assoc();

						if (isset($row1['qno'])) {
						echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="btn btn-success qno col-sm-3">'.$i.'</button></a>';
						}
						else{
						echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="btn btn-warning qno col-sm-3">'.$i.'</button></a>';
						}
					}
				?>
				</div>
				</div>
			</aside>
	</section>
	<footer class="col-sm-12"><center>This is going to be footer</center></footer>
 </body>
 </html>