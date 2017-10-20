<?php
// Upon starting the section
session_start();
date_default_timezone_set("Asia/Kolkata");
// $_SESSION['timer'] = time() + 10; // Give the user Ten minutes
?>
<?php
	// $server = "localhost";
	// $user = "root";
	// $pwd = "12345";
	// $db = "ssc";

	// $conn = new mysqli($server , $user , $pwd , $db);
	// $sql = "SELECT * FROM tid1 WHERE qno = ".$_GET['qno'];
	// $result = $conn->query($sql);
	// $row = $result->fetch_assoc();
	// $qno = $_GET['qno'];
	// setcookie( $qno , "Hello" , time() + (86400), "/");

	// $sql1 = "SELECT * from {$_COOKIE['table']} where qno = '{$qno}'";
	// $result1 = $conn->query($sql1);
	// $row1 = $result1->fetch_assoc();
	

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
	<?php include "./content/instruction.php"; ?>
	<section class="col-sm-12">
			<div class="col-sm-9">
				<?php include "./content/navigation.php"; ?>
				<?php include "./content/questionno.php"; ?>
				<?php include "./content/qbody.php"; ?>
				<?php include "./content/button.php"; ?>
			</div>

			<aside class="col-sm-3 right">
				<?php include "./content/userinfo.php"; ?>
				<?php include "./content/questionlist.php"; ?>
			</aside>
	</section>
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
	      // window.location = "./index.php";
	    }
	    else{
	      document.getElementById('timeee').innerHTML = hours+':'+mins+':'+secs;
	    }
	    setTimeout("countdownto()",1000);
	  }
	countdownto();
</script>