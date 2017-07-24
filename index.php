<?php
// Upon starting the section
session_start();
date_default_timezone_set("Asia/Kolkata");
// $_SESSION['timer'] = time() + 10; // Give the user Ten minutes
?>
<?php
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "ssc";

	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "SELECT * FROM tid1 WHERE qno = ".$_GET['qno'];
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$qno = $_GET['qno'];
	setcookie( $qno , "Hello" , time() + (86400), "/");

	$sql1 = "SELECT * from {$_COOKIE['table']} where qno = '{$qno}'";
	$result1 = $conn->query($sql1);
	$row1 = $result1->fetch_assoc();
	

	// echo $_COOKIE[$qno];
?>
<!DOCTYPE html>
<html>
<head>
	<title>SSC Test</title>
	<?php include './content/head.html'; ?>
		
</head>
<body>
	<header class="col-sm-12"><center><h4>SSC Test</center></h4></header>
	<div class="col-sm-12 instruction">
		<span><button type="button" class="btn btn-default">1</button> Not Visited</span>
		<span><button type="button" class="btn btn-success">1</button> Answered</span>
		<span><button type="button" class="btn btn-danger">1</button> Not Answered</span>
		<span><button type="button" class="btn btn-warning">1</button> Marked For Review & Not Answered</span>
		<span><button type="button" class="btn btn-info">1</button> Marked For Review & Answered</span>

		<span style="float: right;"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Instructions</button></span>
	</div>
	<section class="col-sm-12">
			<div class="col-sm-9">
				<div class="navigation col-sm-12">
					<?php
						if(($_GET['qno'] >= '1') && ($_GET['qno'] <= '25')){
							echo '<a href="index.php?qno=1#english"><button type="button" class="btn btn-primary">English</button></a>';
						}
						else{
							echo '<a href="index.php?qno=1#english"><button type="button" class="btn btn-default">English</button></a>';
						}
					?>
					<?php
						if(($_GET['qno'] >= '26') && ($_GET['qno'] <= '50')){
							echo '<a href="index.php?qno=26#math"><button type="button" class="btn btn-primary">Math</button></a>';
						}
						else{
							echo '<a href="index.php?qno=26#math"><button type="button" class="btn btn-default">Math</button></a>';
						}
					?>
					<?php
						if(($_GET['qno'] >= '51') && ($_GET['qno'] <= '75')){
							echo '<a href="index.php?qno=51#reasoning"><button type="button" class="btn btn-primary">Reasoning</button></a>';
						}
						else{
							echo '<a href="index.php?qno=51#reasoning"><button type="button" class="btn btn-default">Reasoning</button></a>';
						}
					?>
					<?php
						if(($_GET['qno'] >= '76') && ($_GET['qno'] <= '100')){
							echo '<a href="index.php?qno=76#gk"><button type="button" class="btn btn-primary">GK</button></a>';
						}
						else{
							echo '<a href="index.php?qno=76#gk"><button type="button" class="btn btn-default">GK</button></a>';
						}
					?>
					<span style="float: right; font-weight: bold;" id="timeee" class="btn btn-default"></span>
					<button type="button" class="btn btn-primary" style="float: right;">Time Left</button>
				</div>

				<div class="col-sm-12 quesno"><b>Question No :-- <span><?php echo $_GET['qno']; ?></span></b><span style="float: right; margin-right: 15px;">Right Marks - 2 , Negative Marks - 0.5</span></div>

				<div class="col-sm-12 well" style="height: 60vh; overflow-y: auto;">
					<?php 
						if (($row['instruction'] === NULL) && ($row['ip'] === NULL))
						{
							
						}
						else{
							echo '<div class="intro col-sm-6 well">';
								if(isset($row['instruction'])){
									echo $row['instruction'];
									echo "<br>";
								}
								if (isset($row['ip'])) {
									$url = $row['ip'];
									echo "<img src='./pics/{$url}' class='instrimg'>";
								}
							echo '</div>';
						}
					?>
					<?php 
						if (($row['instruction'] === NULL) && ($row['ip'] === NULL))
						{
							echo '<div class="ques col-sm-12 well"> '.$row['question'].' </div>';
							echo '<div class="option col-sm-12 well">';
						}
						else{
							echo '<div class="ques col-sm-6 well"> '.$row['question'].' </div>';
							echo '<div class="option col-sm-6 well">';
						}

					?>
					
					<form method="post" action="ans.php?qno=<?php echo $qno?>">
						<?php 
						if(isset($row1['qno'])){ 
							if ($row1['ans'] == "a1") {
								echo '<b>Ans1 )</b> <input type="radio" name="ans" value="a1" checked> &nbsp;'.$row['a1'].'<br><br>'.
							'<b>Ans2 )</b> <input type="radio" name="ans" value="a2"> &nbsp;'.$row['a2'].'<br><br>'.
							'<b>Ans3 )</b> <input type="radio" name="ans" value="a3"> &nbsp;'.$row['a3'].'<br><br>'.
							'<b>Ans4 )</b> <input type="radio" name="ans" value="a4"> &nbsp;'.$row['a4'].'<br><br>';
							}
							elseif ($row1['ans'] == "a2") {
								echo '<b>Ans1 )</b> <input type="radio" name="ans" value="a1"> &nbsp;'.$row['a1'].'<br><br>'.
							'<b>Ans2 )</b> <input type="radio" name="ans" value="a2" checked> &nbsp;'.$row['a2'].'<br><br>'.
							'<b>Ans3 )</b> <input type="radio" name="ans" value="a3"> &nbsp;'.$row['a3'].'<br><br>'.
							'<b>Ans4 )</b> <input type="radio" name="ans" value="a4"> &nbsp;'.$row['a4'].'<br><br>';
							}
							elseif ($row1['ans'] == "a3") {
								echo '<b>Ans1 )</b> <input type="radio" name="ans" value="a1"> &nbsp;'.$row['a1'].'<br><br>'.
							'<b>Ans2 )</b> <input type="radio" name="ans" value="a2"> &nbsp;'.$row['a2'].'<br><br>'.
							'<b>Ans3 )</b> <input type="radio" name="ans" value="a3" checked> &nbsp;'.$row['a3'].'<br><br>'.
							'<b>Ans4 )</b> <input type="radio" name="ans" value="a4"> &nbsp;'.$row['a4'].'<br><br>';
							}
							elseif ($row1['ans'] == "a4") {
								echo '<b>Ans1 )</b> <input type="radio" name="ans" value="a1"> &nbsp;'.$row['a1'].'<br><br>'.
							'<b>Ans2 )</b> <input type="radio" name="ans" value="a2"> &nbsp;'.$row['a2'].'<br><br>'.
							'<b>Ans3 )</b> <input type="radio" name="ans" value="a3"> &nbsp;'.$row['a3'].'<br><br>'.
							'<b>Ans4 )</b> <input type="radio" name="ans" value="a4" checked> &nbsp;'.$row['a4'].'<br><br>';
							}
						}
						else{
								echo '<b>Ans1 )</b> <input type="radio" name="ans" value="a1"> &nbsp;'.$row['a1'].'<br><br>'.
							'<b>Ans2 )</b> <input type="radio" name="ans" value="a2"> &nbsp;'.$row['a2'].'<br><br>'.
							'<b>Ans3 )</b> <input type="radio" name="ans" value="a3"> &nbsp;'.$row['a3'].'<br><br>'.
							'<b>Ans4 )</b> <input type="radio" name="ans" value="a4"> &nbsp;'.$row['a4'].'<br><br>';
							}
						?>
					</div>
				</div>
				<div class="col-sm-12">
					<input type="submit" class="btn btn-success" name="save" value="Save & Next">
					<input type="submit" class="btn btn-warning" name="review" value="Mark For Review & Next">
					<a href="./clear.php?qno=<?php echo $_GET['qno']; ?>"><button type="button" class="btn btn-danger">Clear Options</button></a>
					<button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#endtest">End Test</button>
					</form>
				</div>

				<!-- <footer>This is going to be footer</footer> -->
			</div>







			<aside class="col-sm-3 right">
				<div class="media well">
				  <div class="media-left">
				    
				  </div>
				  <div class="media-body">
				    <h4 class="media-heading"><?php echo $_COOKIE['name']; ?></h4>
				    <p><b>Roll No. </b> <?php echo $_COOKIE['rollno']; ?></p>
				  </div>
				</div>


				<div class="panel panel-default">
					<div class="panel-heading">Quuestions</div>
					<div class="panel-body" id="qnocontainer" style="height: 60vh; overflow-y: auto;">

						<div class="panel panel-primary" id="english">
							<div class="panel-heading">English</div>
							<div class="panel-body">
							<?php 
								for ($i=1; $i <=25 ; $i++) 
								{
									$review = "rr".$i;
									$sql2 = "SELECT * from {$_COOKIE['table']} where qno = ".$i;

									$result2 = $conn->query($sql2);
									$row2 = $result2->fetch_assoc();
									if($i == $qno){
										if (isset($_COOKIE[$i])) {
											if (isset($row2['qno'])) {
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="current btn btn-info qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="current btn btn-success qno col-sm-3">'.$i.'</button></a>';
												}
											}
											else{
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="current btn btn-warning qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="current btn btn-danger qno col-sm-3">'.$i.'</button></a>';
												}
											}
										}
										else{
											echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="current btn btn-default qno col-sm-3">'.$i.'</button></a>';
										}
									}
									else{
										if (isset($_COOKIE[$i])) {
											if (isset($row2['qno'])) {
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="btn btn-info qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="btn btn-success qno col-sm-3">'.$i.'</button></a>';
												}
											}
											else{
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="btn btn-warning qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="btn btn-danger qno col-sm-3">'.$i.'</button></a>';
												}
											}
										}
										else{
											echo '<a href="index.php?qno='.$i.'#english"><button type="submit" class="btn btn-default qno col-sm-3">'.$i.'</button></a>';
										}	
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
									$review = "rr".$i;
									$sql2 = "SELECT * from {$_COOKIE['table']} where qno = ".$i;

									$result2 = $conn->query($sql2);
									$row2 = $result2->fetch_assoc();
									if($i == $qno){
										if (isset($_COOKIE[$i])) {
											if (isset($row2['qno'])) {
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="current btn btn-info qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="current btn btn-success qno col-sm-3">'.$i.'</button></a>';
												}
											}
											else{
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="current btn btn-warning qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="current btn btn-danger qno col-sm-3">'.$i.'</button></a>';
												}
											}
										}
										else{
											echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="current btn btn-default qno col-sm-3">'.$i.'</button></a>';
										}
									}
									else{
										if (isset($_COOKIE[$i])) {
											if (isset($row2['qno'])) {
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="btn btn-info qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="btn btn-success qno col-sm-3">'.$i.'</button></a>';
												}
											}
											else{
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="btn btn-warning qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="btn btn-danger qno col-sm-3">'.$i.'</button></a>';
												}
											}
										}
										else{
											echo '<a href="index.php?qno='.$i.'#math"><button type="submit" class="btn btn-default qno col-sm-3">'.$i.'</button></a>';
										}	
									}
								}
							?>
							</div>
						</div>
						<div class="panel panel-primary" id="reasoning">
							<div class="panel-heading">Reasoning</div>
							<div class="panel-body">
							<?php 
								for ($i=51; $i <=75 ; $i++) 
								{
									$review = "rr".$i;
									$sql2 = "SELECT * from {$_COOKIE['table']} where qno = ".$i;

									$result2 = $conn->query($sql2);
									$row2 = $result2->fetch_assoc();
									if($i == $qno){
										if (isset($_COOKIE[$i])) {
											if (isset($row2['qno'])) {
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="current btn btn-info qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="current btn btn-success qno col-sm-3">'.$i.'</button></a>';
												}
											}
											else{
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="current btn btn-warning qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="current btn btn-danger qno col-sm-3">'.$i.'</button></a>';
												}
											}
										}
										else{
											echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="current btn btn-default qno col-sm-3">'.$i.'</button></a>';
										}
									}
									else{
										if (isset($_COOKIE[$i])) {
											if (isset($row2['qno'])) {
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="btn btn-info qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="btn btn-success qno col-sm-3">'.$i.'</button></a>';
												}
											}
											else{
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="btn btn-warning qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="btn btn-danger qno col-sm-3">'.$i.'</button></a>';
												}
											}
										}
										else{
											echo '<a href="index.php?qno='.$i.'#reasoning"><button type="submit" class="btn btn-default qno col-sm-3">'.$i.'</button></a>';
										}	
									}
								}
							?>
							</div>
						</div>
						<div class="panel panel-primary" id="gk">
							<div class="panel-heading">GK</div>
							<div class="panel-body">
							<?php 
								for ($i=76; $i <=100 ; $i++) 
								{
									$review = "rr".$i;
									$sql2 = "SELECT * from {$_COOKIE['table']} where qno = ".$i;

									$result2 = $conn->query($sql2);
									$row2 = $result2->fetch_assoc();
									if($i == $qno){
										if (isset($_COOKIE[$i])) {
											if (isset($row2['qno'])) {
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="current btn btn-info qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="current btn btn-success qno col-sm-3">'.$i.'</button></a>';
												}
											}
											else{
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="current btn btn-warning qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="current btn btn-danger qno col-sm-3">'.$i.'</button></a>';
												}
											}
										}
										else{
											echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="current btn btn-default qno col-sm-3">'.$i.'</button></a>';
										}
									}
									else{
										if (isset($_COOKIE[$i])) {
											if (isset($row2['qno'])) {
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="btn btn-info qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="btn btn-success qno col-sm-3">'.$i.'</button></a>';
												}
											}
											else{
												if (isset($_COOKIE[$review])) {
												echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="btn btn-warning qno col-sm-3">'.$i.'</button></a>';
												}
												else{
												echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="btn btn-danger qno col-sm-3">'.$i.'</button></a>';
												}
											}
										}
										else{
											echo '<a href="index.php?qno='.$i.'#gk"><button type="submit" class="btn btn-default qno col-sm-3">'.$i.'</button></a>';
										}	
									}
								}
							?>
							</div>
						</div>
					</div>
				</div>
			</aside>
	</section>
	<!-- <footer class="col-sm-12"><center>This is going to be footer</center></footer> -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Buttons and Color Instructions</h4>
      </div>
      <div class="modal-body">
        <p>
        	<div class="col-sm-12 well">

       				<button class="btn btn-success" name="save">Save & Next</button> <b>Submission Of Answers & Go to Next Question.</b><br><br>
					<button class="btn btn-warning" name="review">Mark For Review & Next</button> <b>Mark The Question for Review if Answer is Marked it Would be Saved.</b><br><br>
					<button type="button" class="btn btn-danger">Clear Options</button> <b>Answer Would Be Unchecked and Not Considered in Test.</b><br><br>
					<button type="button" class="btn btn-primary">End Test</button> <b>End The Test and Finally Submit</b><br><br>
					<button type="button" class="btn btn-default">1</button> <b>Question Not Visited</b><br><br>
					<button type="button" class="btn btn-success">1</button> <b>Question Answered</b><br><br>
					<button type="button" class="btn btn-danger">1</button> <b>Question Not Answered</b><br><br>
					<button type="button" class="btn btn-warning">1</button> <b>Question Marked For Review but Not Answered</b><br><br>
					<button type="button" class="btn btn-info">1</button> <b>Question Marked For Review And Answered</b><br><br>

        	</div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="endtest" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Do You Really want to end the test</h4></center>
      </div>
      <div class="modal-body">
        <p>
        	<div class="col-sm-12 well">
        	<center><a href="./end.php"><button class="btn btn-primary">End Test</button></a></center>
        	</div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





</body>
</html>
<script type="text/javascript">
var TimeLimit = new Date('<?php echo date('r', $_SESSION['timer']) ?>');
</script>

<script type="text/javascript">
function countdownto() {
  var date = Math.round((TimeLimit-new Date())/1000);
  var hours = Math.floor(date/3600);
  var tt = hours;
  date = date - (hours*3600);
  var mins = Math.floor(date/60);
  date = date - (mins*60);
  var secs = date;
  if (hours<10) hours = '0'+hours;
  if (mins<10) mins = '0'+mins;
  if (secs<10) secs = '0'+secs;
    if (tt<0) { 
      document.getElementById('timeee').innerHTML = "time out";
      window.location = "./timeout.php";
    }
    else{
      document.getElementById('timeee').innerHTML = hours+':'+mins+':'+secs;
    }
    setTimeout("countdownto()",1000);
  }
countdownto();
</script>