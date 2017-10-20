<!DOCTYPE html>
<html>
<head>
	<title>CBTS - Computer Based Test Series</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Fonts By Google -->
	<link href="https://fonts.googleapis.com/css?family=Nosifer|Josefin+Sans" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<section class="main">
		<section class="col-sm-12 top-bar"></section>
		<section class="col-sm-12 company">
			
			<div class="logo"><h1>CBTS<small>.in</small><br><small class="moto">Computer Based Test Series</small></h1></div>
			<div class="login"><h2><button class="btn btn-primary test-login">Test Login</button></h2></div>
			
		</section>
		<section class="col-sm-12 package">
			<h2>Our Test Packages<br><small>Giving Best Options For You</small></h2>
			<div class="col-sm-12 package-content">
				<?php 
					include "../adminlibrary/phplib.php"; 
					$sql = "select * from package";
					$result = $conn->query($sql);
					while ($package = $result->fetch_assoc()) {
						$no_of_test = 0;
						$ptable = "p".$package['pid'];
						$sql1 = "select test from {$ptable}";
						$result1 = $conn->query($sql1);
						while($row = $result1->fetch_assoc()){
							$no_of_test++;
						}
						echo "
							<div class='package-card col-sm-3 col-xs-10'>
								<h3>{$package['name']}</h3>
								<div><b>Description</b><br>{$package['description']}</div>
								<div><b>No Of Test : </b>{$no_of_test}</div>
								<div>{$package['creation']}</div>
								<div>&#8377; {$package['price']}</div>
								<div><button class='btn btn-success buy-now'>Buy Now</button></div>
								
							</div>";
					}
				?>
				
			</div>
		</section>
		<section class="col-sm-12 footer">
			&copy; cbts.in All Rights Reserved
		</section>
	</section>
	<section class="test-login col-sm-12">
		<section class="col-sm-12 company">
			<div class="logo"><h1>CBTS<small>.in</small><br><small class="moto">Computer Based Test Series</small></h1></div>
		</section>
		<div class="col-sm-6 login-container">
			<h3>Login</h3>
			<form>
				<input type="text" name="mobile" class="form-control" placeholder="Mobile No">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<button class="btn btn-primary">Login</button>
			</form>
		</div>
	</section>
</body>
</html>
<style type="text/css">
	.top-bar{
		background-color: green;
		height: 30px;
		display: none;
	}
	.main{
		border: 0;
	}
	.company{
		background-color: rgb(255,238,238);
		display: block;
		border-bottom: 10px solid lightgrey;
	}
	.company .logo h1{
		font-family: 'Nosifer', cursive;
		color: rgb(125,134,125);
	}
	.logo{
		float: left;
	}
	.login{
		float: right;
	}
	.login button{
		border-radius: 0;
	}
	.package{
		text-align: center;
		background-color: rgb(238,238,255);
		padding: 0;
	}
	.package h2{
		border-bottom: 1px solid green;
		margin: 0;
		padding-top: 10px;
		color: rgb(250,34,225);
		display: block;
		box-shadow: 0px 5px 5px black;
	}
	.package h2 small{
		font-size: 15px;
	}
	.package-content{
		margin: 0;
		background-color: rgb(245,245,245);
	}
	.package-card{
		background-color: white;
		margin: 20px;
		border: 1px solid lightgrey;
		box-shadow: 1px 1px 2px grey;
		padding: 0;
		float: initial;
		margin-left: auto;
		margin-right: auto;
		display: inline-block;
	}
	.package-card div{
		padding: 15px;
		background-color: lightyellow;
		border-bottom: 1px solid lightgrey;
	}
	body{
		background-color: white;
	}
	.moto{
		font-family: 'Josefin Sans' , sans-serif;
		font-size: 18px;
	}
	.footer{
		text-align: center;
		padding: 15px;
		background-color: grey;
		color: white;
		box-shadow: 0px -2px 5px black;
	}
	.buy-now{
		border-radius: 0;
	}

	@media only screen and (max-width: 786px){
		.logo , .login{
			float: initial;
			text-align: center;
			margin-top: 0;
		}
		.company h1{
			margin-top: 0;
		}
		.company{
			padding-top: 20px;
		}
	}
	section.test-login{
		text-align: center;
		height: 0vh;
		position: absolute;
		background-color: white;
		display: none;
		padding: 0;
		/*width: 0;*/
		/*background-color: grey;*/
	}
	.login-container{
		float: initial;
		margin-left: auto;
		margin-right: auto;
		/*margin-top: 30px;*/
		background-color: lightgrey;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$("button.test-login").click(function(){
			
			$("section.test-login").css("display","block");
			$("section.test-login").animate({height:"100vh" , width:"100%"},"slow");
			$("section.main").css("display","none");
		});
	});
</script>