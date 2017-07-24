<!DOCTYPE html>
<html>
<head>
	<title>SSC Test</title>
	<?php include './content/head.html'; ?>
</head>
<body>
	<header class="col-sm-12"><center><h4>SSC Monk Test CBTS</h4></center></header>
	<section class="col-sm-2"></section>
	<section class="col-sm-8"><br>
		<div class="col-sm-12">
			<center><h3>Welcome !!!</h3></center>
			<div class="col-sm-6 well">Name : <?php echo $_COOKIE['name']; ?></div>
			<div class="col-sm-6 well">Roll No. : <?php echo $_COOKIE['rollno']; ?></div>
			
		</div>

			<div class="col-sm-12">
				<table class=" table table-bordered">
					<thead>
						<tr class="success">
							<th>Subjects</th>
							<th>No. Of Questions</th>
							<th>Total Questions</th>
							<th>Total Time</th>
							<th>Total Marks</th>
						</tr>
					</thead>
					<tbody>
						<tr class="info">
							<td>English</td>
							<td>25</td>
							<td rowspan="4">100</td>
							<td rowspan="4">00:60:00</td>
							<td rowspan="4">200</td>
						</tr>
						<tr class="info">
							<td>Math</td>
							<td>25</td>
						</tr>
						<tr class="info">
							<td>Reasoning</td>
							<td>25</td>
						</tr>
						<tr class="info">
							<td>GK</td>
							<td>25</td>
						</tr>
					</tbody>
				</table>
				
			</div>
			<div class="col-sm-12 well">
				<center><h3>General Instructions</h3></center><hr>
				<ol>
				<li> There is only one correct answer to each question. Click on the most appropriate option to mark it as your answer and must click save it.</li>

				<li> You will be awarded two mark for each correct answer.</li>

				<li> Each incorrect answer will attract a penalty of 2/4 or 0.50 mark.</li>

				<li> You can change your answer by clicking on some other option. And must click save and continue to save your updated answer.</li>

				<li> A Number list of all questions appears at the right hand side of the screen. You can access the questions in any order within a section or across sections by clicking on the question number given on the number list.</li>

				<li>Timing appears on the top of the middle of the screen.You can see here how much time is left for the test .</li>

				
				<li>You can use rough sheets while taking the test.</li>

				<li>Do not click the button “End test” before completing the test. A test once submitted cannot be resumed.</li>

				<li>You can choose 'Mark for Review' option If you have doubt in any question which appears right side of the 'End Test' button.</li>
				</ol>
				
			</div>

			<div class="col-sm-12 well">
				<center><h3>Buttons Instruction</h3></center><hr>
   				<button class="btn btn-success" name="save">Save & Next</button> <b>Submission Of Answers & Go to Next Question.</b><br>
				<button class="btn btn-warning" name="review">Mark For Review & Next</button> <b>Mark The Question for Review if Answer is Marked it Would be Saved.</b><br>
				<button type="button" class="btn btn-danger">Clear Options</button> <b>Answer Would Be Unchecked and Not Considered in Test.</b><br>
				<button type="button" class="btn btn-primary">End Test</button> <b>End The Test and Finally Submit</b><br>
				<button type="button" class="btn btn-default">1</button> <b>Question Not Visited</b><br>
				<button type="button" class="btn btn-success">1</button> <b>Question Answered</b><br>
				<button type="button" class="btn btn-danger">1</button> <b>Question Not Answered</b><br>
				<button type="button" class="btn btn-warning">1</button> <b>Question Marked For Review but Not Answered</b><br>
				<button type="button" class="btn btn-info">1</button> <b>Question Marked For Review And Answered</b><br>
        	</div>
			<center><div class="col-sm-12 well"><a href="./start.php"><button type="submit" class="btn-primary btn">Start Test</button></a></div></center>
	
	</section>
	<section class="col-sm-2"></section>
</body>
</html>
<style type="text/css">
	section{
		height: auto;
	}
	body{
		background-color: rgb(238,238,238);
	}
</style>
